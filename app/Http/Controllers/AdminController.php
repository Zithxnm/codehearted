<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Course;
use App\Models\Quiz;
use App\Models\AuditLog;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        // Calculate Stats
        $totalUsers = User::count();
        $totalCourses = Course::count();
        $totalQuizzes = Quiz::count();

        // Count rows in sessions table for "Active Sessions"
        $activeSessions = DB::table('sessions')->count();

        // Fetch Audit Logs
        $auditLogs = AuditLog::with('admin')
            ->latest()
            ->take(10)
            ->get();

        // Fetch for user management
        $allUsers = User::all();

        // Return View with Data
        return view('php.Admin', compact(
            'totalUsers',
            'totalCourses',
            'totalQuizzes',
            'activeSessions',
            'auditLogs',
            'allUsers',
        ));
    }
}
