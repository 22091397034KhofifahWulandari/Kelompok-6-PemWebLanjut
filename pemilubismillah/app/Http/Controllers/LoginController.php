<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'role' => 'required|string',
            'identifier' => 'required|string',
            'password' => 'required|string',
        ]);
        

        $credentials = ['password' => $request->password];

        switch ($request->role) {
            case 'admin':
                $credentials['username'] = $request->identifier;
                $guard = 'admin';
                $redirectRoute = 'admin.dashboard';
                break;
            case 'user':
                $credentials['nik'] = $request->identifier;
                $guard = 'user';
                $redirectRoute = 'user.dashboard';
                break;
            case 'partai':
                $credentials['username'] = $request->identifier;
                $guard = 'partai';
                $redirectRoute = 'partai.dashboard';
                break;
            default:
                return back()->withErrors(['role' => 'Invalid role selected']);
        }

        if (Auth::guard($guard)->attempt($credentials)) {
            return redirect()->route($redirectRoute);
        }

        return back()->withErrors(['identifier' => 'Identifier or password are incorrect.']);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('welcome'); // Arahkan ke halaman selamat datang setelah logout
    }
}
