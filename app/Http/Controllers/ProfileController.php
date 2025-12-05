<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class ProfileController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        $stat = $user->stat;

        if ($stat && $stat->last_quiz_date) {
            $lastDate = $stat->last_quiz_date->startOfDay();
            $yesterday = Carbon::yesterday()->startOfDay();

            if ($lastDate->lt($yesterday)) {
                $stat->Daily_Streak = 0;
                $stat->save();
            }
        }

        return view('php.Profile');
    }
}
