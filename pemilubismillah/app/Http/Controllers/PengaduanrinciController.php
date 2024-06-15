<?php

namespace App\Http\Controllers;
use App\Models\PengaduanUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PengaduanrinciController extends Controller
{
    public function pengaduanrinci($id)
    {
        $pengaduan = PengaduanUser::findOrFail($id);
        return view('pengaduanrinci', compact('pengaduan'));
    }
}
