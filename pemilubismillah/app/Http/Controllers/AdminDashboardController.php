<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserPemilu; // Correct import statement

class AdminDashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function userList()
    {
        $users = UserPemilu::all();
        return view('admin.userlist', compact('users'));
    }
    public function destroy(UserPemilu $user)
{
    $user->delete();
    return redirect()->route('admin.userlist')->with('success', 'User deleted successfully.');
}
}
