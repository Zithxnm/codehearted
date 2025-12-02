<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseEnrollment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return view('php.Courses', compact('courses'));
    }

    public function show($id)
    {
        // 1. Fetch the course with modules
        $course = Course::with(['modules' => function($q) {
            $q->orderBy('order');
        }])->findOrFail($id);

        if (Auth::check()) {
            // firstOrCreate prevents duplicate enrollments
            CourseEnrollment::firstOrCreate([
                'user_id' => Auth::id(),
                'course_id' => $course->id
            ]);
        }

        // 2. Determine the correct CSS/JS file based on course title/ID
        // (This keeps your existing separate files working)
        $styleMap = [
            'Differential Calculus' => ['css' => 'DiffCall_Styles.css', 'js' => 'DiffCall_Scripts.js'],
            'Digital Logic' => ['css' => 'DigiLogic_Styles.css', 'js' => 'DigiLogic_Scripts.js'],
            'Fundamentals of Computing' => ['css' => 'CompFund_Styles.css', 'js' => 'CompFund_Scripts.js'],
            'Programming Fundamentals' => ['css' => 'ProgFund_Styles.css', 'js' => 'ProgFund_Scripts.js'],
        ];

        // Default fallback if course name doesn't match
        $assets = $styleMap[$course->title] ?? ['css' => 'Courses_Styles.css', 'js' => 'Courses_Scripts.js'];

        // 3. Return the generic view
        return view('php.Course_Show', compact('course', 'assets'));
    }
}
