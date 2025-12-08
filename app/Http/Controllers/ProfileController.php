<?php

namespace App\Http\Controllers;

use App\Models\AuditLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use App\Models\Community;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class ProfileController extends Controller
{
    public function myProfile()
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

        $recentPosts = Community::where('user_id', $user->id)
            ->with('parent')
            ->latest()
            ->take(5)
            ->get();

        return view('php.Profile', compact('user', 'recentPosts'));
    }

    public function publicProfile($id)
    {
        $user = User::with('stat')->findOrFail($id);

        $recentPosts = Community::where('user_id', $id)
            ->with('parent')
            ->latest()
            ->take(5)
            ->get();

        return view('php.Profile', compact('user', 'recentPosts'));
    }


    public function update(Request $request)
    {
        $user = Auth::user();

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username,' . $user->id,
            'bio' => 'nullable|string|max:500',
            'profile_picture' => 'nullable|image|max:2048', // Max 2MB
        ]);

        $user->name = $request->name;
        $user->username = $request->username;
        $user->bio = $request->bio;

        if ($request->hasFile('profile_picture')) {
            // Delete old image if it's not a default one
            if ($user->profile_picture_path && !str_contains($user->profile_picture_path, 'imgs/')) {

                $oldPath = str_replace('storage/', '', $user->profile_picture_path);
                if (Storage::disk('public')->exists($oldPath)) {
                    Storage::disk('public')->delete($oldPath);
                }
            }

            // Save new image
            $path = $request->file('profile_picture')->store('profile_pictures', 'public');
            $user->profile_picture_path = 'storage/' . $path;
        }

        AuditLog::create([
            'Admin_ID' => Auth::id(),
            'Action' => 'Profile Updated',
        ]);
        $user->save();

        $updated = $user->update($validatedData);

        if($updated) {
            return back()->with('success', 'Profile updated successfully!');
        }
        return back()->with('error', 'Failed to update profile. Please try again.');
    }

    public function updatePassword(Request $request)
    {

        $validated = $request->validate([
            'current_password' => 'required|current_password',
            'password' => [
                'required',
                'confirmed',
                'min:8',
                'regex:/^.*(?=.{8,30})(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*(),.?":{}|<>]).*$/'
            ],
        ]);

        $user = Auth::user();
        $user->update([
            'password' => Hash::make($validated['password']),
        ]);

        AuditLog::create([
            'Admin_ID' => $user->id,
            'Action' => 'Changed Password',
        ]);

        return back()->with('success', 'Password changed successfully!');
    }

    public function editPassword()
    {
        return view('php.ChangePassword');
    }
}
