<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\UserPemilu;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:255|unique:userpemilu',
            'nama_lengkap' => 'required|string|max:255',
            'nik' => 'required|string|max:16|unique:userpemilu',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required|string',
            'password' => 'required|string|min:8|confirmed',
            'foto_ktp' => 'required|image|mimes:jpeg,png,jpg',
            'profile_picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg', // Foto profil wajib diunggah
        ]);
    
        // Simpan foto KTP dengan path baru
        $foto_ktp_path = $request->file('foto_ktp')->store('public/new_foto_ktp');
        $profile_picture_path = $request->file('profile_picture')->store('public/new_profile_pictures');
    
        // Return the paths for debugging
        return [
            'foto_ktp_path' => $foto_ktp_path,
            'profile_picture_path' => $profile_picture_path,
        ];
        
        UserPemilu::create([
            'username' => $request->username,
            'nama_lengkap' => $request->nama_lengkap,
            'nik' => $request->nik,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'password' => Hash::make($request->password),
            'foto_ktp' => $foto_ktp_path,
            'profile_picture' => $profile_picture_path,
        ]);
        
    
        // Buat entri pengguna
        UserPemilu::create([
            'username' => $request->username,
            'nama_lengkap' => $request->nama_lengkap,
            'nik' => $request->nik,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'password' => Hash::make($request->password),
            'foto_ktp' => $foto_ktp_path,
            'profile_picture' => $profile_picture_path,
        ]);
    
        return redirect()->route('login')->with('status', 'Registration successful. Please login.');
    }
}
