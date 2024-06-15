<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserProfileController extends Controller
{
    public function showProfileForm()
    {
        return view('user.profile');
    }

    public function updateProfile(Request $request)
    {
        // Check if the user is authenticated
        if (Auth::guard('user')->check()) {
            // If authenticated, get the user object
            $user = Auth::guard('user')->user();
    
            $request->validate([
                'username' => 'required|string|max:255|unique:userpemilu,username,' . $user->id,
                'password' => 'nullable|string|min:8|confirmed',
                'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
                'foto_ktp' => 'nullable|image|mimes:jpeg,png,jpg', // add validation for KTP photo
            ]);
    
            $user->username = $request->username;
    
            if ($request->filled('password')) {
                $user->password = Hash::make($request->password);
            }
    
            if ($request->hasFile('profile_picture')) {
                // Delete the existing profile picture if it exists
                if ($user->profile_picture) {
                    Storage::delete('public/' . $user->profile_picture);
                }
    
                // Store the new profile picture in the new directory
                $path = $request->file('profile_picture')->store('new_profile_pictures', 'public');
                $user->profile_picture = $path;
            }
    
            if ($request->hasFile('foto_ktp')) {
                // Delete the existing KTP photo if it exists
                if ($user->foto_ktp) {
                    Storage::delete('public/' . $user->foto_ktp);
                }
    
                // Store the new KTP photo in the new directory
                $ktp_path = $request->file('foto_ktp')->store('new_foto_ktp', 'public');
                $user->foto_ktp = $ktp_path;
            }
    
            $user->save();
    
            return redirect()->route('user.profile')->with('status', 'Profile updated successfully.');
        } else {
            // If the user is not authenticated, redirect to the login page or perform other actions as needed
            return redirect()->route('login')->with('error', 'You must be logged in to update your profile.');
        }
    }
}  
