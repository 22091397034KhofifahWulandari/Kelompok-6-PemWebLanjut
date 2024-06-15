<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PengaduanUser;
use Illuminate\Support\Facades\Auth;

class PengaduanController extends Controller
{
    public function index()
    {
        // Get the complaints of the authenticated user
        $pengaduans = PengaduanUser::where('nik', Auth::user()->nik)->latest()->get();

        // Return view with the list of complaints
        return view('user.aduan.pengaduan', compact('pengaduans'));
    }

    public function create()
    {
        // Display form to create a new complaint
        return view('pengaduan.create');
    }

    public function store(Request $request)
    {
        // Validate data from the form
        $request->validate([
            'judul' => 'required|string|max:255',
            'isi_laporan' => 'required|string',
            'tanggal_pengaduan' => 'required|date',
            'foto' => 'image|mimes:jpeg,png,jpg,gif', // Max size 2MB
        ]);

        // Handle file upload if a photo is included
        $fotoPath = null;
        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('public/complaints');
        }

        // Create new PengaduanUser instance with the received data
        $pengaduan = new PengaduanUser();
        $pengaduan->nik = Auth::user()->nik; // Get the NIK of the authenticated user
        $pengaduan->judul = $request->input('judul');
        $pengaduan->isi_laporan = $request->input('isi_laporan');
        $pengaduan->tanggal_pengaduan = $request->input('tanggal_pengaduan');
        $pengaduan->foto = $fotoPath;
        $pengaduan->status = 'pending'; // Default status

        // Save the new complaint data to the database
        $pengaduan->save();

        // Redirect to the complaints list page with a success message
        return redirect()->route('user.aduan.pengaduan')->with('success', 'Aduan berhasil disimpan.');
    }
}

