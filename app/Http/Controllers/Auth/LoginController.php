<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\AuditLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use PhpParser\Node\Expr\Throw_;

class LoginController extends Controller
{

    public function showLoginForm()
    {
        return view('auth.Login');
    }

    public function login(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string'
        ]);

        $remember = $request->boolean('remember');

        if (Auth::attempt($validatedData, $remember)) {
            $request->session()->regenerate();

            AuditLog::create([
                'Admin_ID' => Auth::id(),
                'Action' => 'Logged In',
            ]);

            return redirect()->route('dashboard');
        }

        throw ValidationException::withMessages([
            'email' => ['The provided email is not registered.'],
            'password' => ['The provided password is not valid.']
        ]);
    }

    public function logout(Request $request)
    {
        AuditLog::create([
            'Admin_ID' => Auth::id(),
            'Action' => 'Logged Out',
        ]);
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('show.login');
    }
}
