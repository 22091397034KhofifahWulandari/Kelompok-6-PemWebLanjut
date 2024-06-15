<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoblosPemiluController extends Controller
{
    public function index()
    {
        return view('user.coblos.coblos_Pemilu');
    }
    public function create()
    {
        // Display form to create a new complaint
        return view('user.coblos.coba');
    }
}
