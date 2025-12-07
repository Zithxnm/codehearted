<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Community;
use App\Models\User;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('search');

        if (!$query) {
            return redirect()->back();
        }

        // Search Courses
        $courses = Course::where('title', 'like', "%{$query}%")
            ->orWhere('description', 'like', "%{$query}%")
            ->get();

        // Search Community Discussions
        $discussions = Community::where(function($q) use ($query) {
            $q->where('Title', 'like', "%{$query}%")
                ->orWhere('Content', 'like', "%{$query}%");
            })
            ->whereNull('Parent_ID')
            ->with('user')
            ->withCount('replies') // Get reply count
            // ADD THIS: Check if current user liked it
            ->withExists(['likedByUsers as is_liked' => function ($q) {
                $q->where('user_id', auth()->id());
            }])
            ->get();

        // Search Users
        $users = User::where('name', 'like', "%{$query}%")
            ->orWhere('username', 'like', "%{$query}%")
            ->get();

        return view('php.Search_Results', compact('query', 'courses', 'discussions', 'users'));
    }
}
