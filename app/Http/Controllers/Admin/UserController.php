<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AuditLog;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class   UserController extends Controller
{
    // Promote or Demote a user
    public function toggleRole($id)
    {
        $user = User::findOrFail($id);

        // Prevent deleting/demoting yourself
        if ($user->id === Auth::id()) {
            return back()->with('error', 'You cannot change your own role.');
        }

        // Toggle between 'student' and 'admin'
        $user->role = ($user->role === 'admin') ? 'student' : 'admin';
        $user->save();

        // Log the action
        AuditLog::create([
            'Admin_ID' => Auth::id(),
            'Action' => "Changed role of {$user->name} to {$user->role}",
        ]);

        return back()->with('success', "User role updated to {$user->role}.");
    }

    // Delete a user
    public function destroy($id)
    {
        $user = User::findOrFail($id);

        if ($user->id === Auth::id()) {
            return back()->with('error', 'You cannot delete your own account.');
        }

        $user->delete();

        AuditLog::create([
            'Admin_ID' => Auth::id(),
            'Action' => "Deleted user {$user->name}",
        ]);

        return back()->with('success', 'User account deleted.');
    }
}
