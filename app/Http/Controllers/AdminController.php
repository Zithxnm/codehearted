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
        $totalUsers = User::count();
        $totalCourses = Course::count();
        $totalQuizzes = Quiz::count();
        $activeSessions = DB::table('sessions')->whereNotNull('user_id')->count();
        $auditLogs = AuditLog::with('admin')->latest()->paginate(10);
        $allUsers = User::all();

        $coursesWithCount = Course::withCount('users')->get();


        $chartLabels = $coursesWithCount->pluck('title');
        $chartData = $coursesWithCount->pluck('users_count');

        $months = collect([]);
        $userGrowth = collect([]);
        $activityLog = collect([]);

        for ($i = 5; $i >= 0; $i--) {
            $date = \Carbon\Carbon::now()->subMonths($i);

            $months->push($date->format('M'));

            $userGrowth->push(User::whereYear('created_at', $date->year)
                ->whereMonth('created_at', $date->month)
                ->count());

            $activityLog->push(AuditLog::whereYear('created_at', $date->year)
                ->whereMonth('created_at', $date->month)
                ->count());
        }

        return view('php.Admin', compact(
            'totalUsers', 'totalCourses', 'totalQuizzes', 'activeSessions',
            'auditLogs', 'allUsers',
            'chartLabels', 'chartData',
            'months', 'userGrowth', 'activityLog'
        ));
    }
}
