<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Course;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        $user->load('stat');
        $stats = $user->stat;


        $recentCourses = $user->courses()->with('modules')->take(4)->get();


        $allCourses = Course::all();
        $completedCourses = $allCourses->filter(function ($course) use ($user) {
           return $user->hasCompletedCourse($course->id);
        });

        return view('php.Dashboard', compact('user' ,'stats', 'recentCourses', 'completedCourses'));
    }
}
