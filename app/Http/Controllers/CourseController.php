<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    // 1. Show the list of ALL courses
    public function index()
    {
        $courses = Course::all(); // Fetch everything from DB
        return view('php.Courses', compact('courses'));
    }

    // 2. Show ONE specific course and its modules
    public function show($id)
    {
        // Fetch course with its modules, sorted by order
        $course = Course::with(['modules' => function($q) {
            $q->orderBy('order');
        }])->findOrFail($id);

        // LOGIC: If you still want to use your specific designs for specific courses,
        // you can check the ID or Title and return different views.

        // Example: If ID 1 is Calculus, load the Calc view
        if ($course->title === 'Differential Calculus') {
            return view('php.DiffCall', compact('course'));
        }
        if ($course->title === 'Digital Logic') {
            return view('php.DigiLogic', compact('course'));
        }
        if ($course->title === 'Fundamentals of Computing') {
            return view('php.CompFund', compact('course'));
        }
        if ($course->title === 'Programming Fundamentals') {
            return view('php.ProgFund', compact('course'));
        }

        // Fallback for future courses
        return view('php.Course_Generic', compact('course'));
    }
}
