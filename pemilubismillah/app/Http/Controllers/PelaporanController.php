<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelaporan;
use Illuminate\Support\Facades\Auth;

class PelaporanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function pelaporan()
    {
        $reports = Pelaporan::where('user_id', Auth::id())->get();
        return view('partai.pelaporan', compact('reports'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'kegiatan' => 'required|string|max:255',
            'metode' => 'required|string|max:255',
            'tempat' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'jumlah_peserta' => 'required|integer',
            'status' => 'required|string'
        ]);

        $validated['user_id'] = Auth::id();

        Pelaporan::create($validated);

        return redirect()->route('partai.pelaporan')->with('success', 'Laporan berhasil dikirim!');
    }

    public function daftarPelaporan()
    {
        $reports = Pelaporan::where('user_id', Auth::id())->get();
        return view('partai.daftar-pelaporan', compact('reports'));
    }

    public function edit($id)
    {
        $report = Pelaporan::where('user_id', Auth::id())->findOrFail($id);
        return view('partai.edit-pelaporan', compact('report'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'kegiatan' => 'required|string|max:255',
            'metode' => 'required|string|max:255',
            'tempat' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'jumlah_peserta' => 'required|integer',
            'status' => 'required|string'
        ]);

        $report = Pelaporan::where('user_id', Auth::id())->findOrFail($id);
        $report->update($validated);

        return redirect()->route('partai.pelaporan')->with('success', 'Laporan berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $report = Pelaporan::where('user_id', Auth::id())->findOrFail($id);
        $report->delete();

        return redirect()->route('partai.pelaporan')->with('success', 'Laporan berhasil dihapus!');
    }
  
}
