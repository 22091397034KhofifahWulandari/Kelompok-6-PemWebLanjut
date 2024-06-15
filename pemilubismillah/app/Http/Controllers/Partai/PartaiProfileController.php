<?php

namespace App\Http\Controllers\Partai;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PartaiProfileController extends Controller
{
    public function showProfile()
    {
        return view('partai.profile');
    }
}
