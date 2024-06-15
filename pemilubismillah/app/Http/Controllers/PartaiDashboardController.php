<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partai;

class PartaiDashboardController extends Controller
{
    public function index()
    {
        return view('partai.dashboard');
    }

    public function partaiList()
    {
        $partais = Partai::all();
        return view('admin.partailist', compact('partais'));
    }
}
