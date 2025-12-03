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
        // (Requires the 'database' session driver, which you have set up)
        $activeSessions = DB::table('sessions')->count();

        // Fetch Audit Logs
        // Get the latest 10 logs, including the Admin's name
        $auditLogs = AuditLog::with('admin')
            ->latest()
            ->take(10)
            ->get();

        // 3. Return View with Data
        return view('php.Admin', compact(
            'totalUsers',
            'totalCourses',
            'totalQuizzes',
            'activeSessions',
            'auditLogs'
        ));
    }
}
