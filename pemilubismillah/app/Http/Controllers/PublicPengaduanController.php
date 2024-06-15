<?php

namespace App\Http\Controllers;

use App\Models\PengaduanUser;
use Illuminate\Http\Request;

class PublicPengaduanController extends Controller
{
    // Method for displaying admin page with complaints
    public function kelompok5()
    {
        $pengaduans = PengaduanUser::all(); 

        // Kirim data pengaduan ke tampilan
        return view('publik.kelompok5', compact('pengaduans'));
    }
    public function pengaduanrinci($id)
    {
        $pengaduan = PengaduanUser::findOrFail($id);
        return view('pengaduan.rinci', compact('pengaduan'));
    }
}