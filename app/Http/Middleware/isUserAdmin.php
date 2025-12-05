<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class isUserAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        // Check if user is logged in AND has the 'admin' role
        if (Auth::check() && Auth::user()->role === 'admin') {
            return $next($request); // Continue to the page.
        }

        // If not an admin, block them
//        abort(403, 'Unauthorized action. Admins only.');
        return redirect()->route('dashboard');
    }
}
