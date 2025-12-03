<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\AuditLog;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{
    public function showRegisterForm()
    {
        return view('auth.Register');
    }

    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255|min:3',
            'email' => 'required|email|unique:users,email',
            'password' => [
                'required',
                'string',
                'min:8',
                'max:30',
                'regex:/^.*(?=.{8,30})(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*(),.?":{}|<>]).*$/',
                'confirmed',
            ],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'student',
        ]);

       // Create Profile for User
        $user->profile()->create([
            'Display_Name' => $user->name, // Default to their name
            'Theme' => 'light',            // Default theme
            'Join_Date' => now(),          // Set join date
        ]);

        // 3. Create Empty Stats
        $user->stat()->create([
            'Achievements' => 0,
            'Quizzes' => 0,
            'Daily_Streak' => 0,
            'Course_Badge' => 0,
        ]);

        Auth::login($user);

        // Adds to auditlog
        AuditLog::create([
            'Admin_ID' => Auth::id(),
            'Action' => 'Account Created',
        ]);

        return redirect('/dashboard');
    }
}
