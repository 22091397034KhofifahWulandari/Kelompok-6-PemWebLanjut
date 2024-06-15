<?php

namespace App\Http\Controllers;
use App\Models\Pelaporan;
use Illuminate\Http\Request;

class PublicPelaporanController extends Controller
{
    public function showByUser($userId)
    {
        // Mengambil semua laporan dari database yang dimiliki oleh user dengan user_id tertentu
        $reports = Pelaporan::where('user_id', $userId)->get();

        // Mengirimkan data pelaporan ke view untuk ditampilkan
        return view('publik.all_reports', compact('reports', 'userId'));
    }

}
