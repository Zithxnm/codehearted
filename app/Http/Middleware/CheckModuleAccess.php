<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckModuleAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        $moduleId = $request->route('module');

        $module = \App\Models\Module::findOrFail($moduleId);

        $previousModule = \App\Models\Module::where('course_id', $module->course_id)
            ->where('order', '<', $module->order)
            ->orderBy('order', 'desc')
            ->first();

        if ($previousModule && !Auth::user()->hasCompletedModule($previousModule->id)) {
            return redirect()->route('courses.show', $module->course_id)
                ->with('error', 'You must complete the previous module first!');
        }

        return $next($request);
    }
}
