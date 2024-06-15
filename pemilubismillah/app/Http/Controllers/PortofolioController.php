<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Portofolio;
use Illuminate\Support\Facades\Storage;

class PortofolioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function portofolio()
    {
        $portofolios = Portofolio::where('user_id', Auth::id())->get();
        return view('partai.portofolio', compact('portofolios'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
           
            'jabatan' => 'required',
            'foto' => 'image|mimes:jpeg,png,jpg,gif',
            'nama_lengkap' => 'required',
            'jenis_kelamin' => 'required',
            'tempat_tanggal_lahir' => 'required',
            'partai' => 'required',
            'alamat' => 'required',
            'kota' => 'required',
            'provinsi' => 'required',
            'kode_pos' => 'required',
            'visi_misi' => 'required',
            'pendidikan' => 'required',
            'pengalaman_kerja' => 'required',
            'organisasi' => 'required',
            'prestasi' => 'required',
        ]);

        $photoPath = $request->file('foto')->store('photos', 'public');

        Portofolio::create([
            'user_id' => $request->user_id,
            'jabatan' => $request->jabatan,
            'foto' => $photoPath,
            'nama_lengkap' => $request->nama_lengkap,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tempat_tanggal_lahir' => $request->tempat_tanggal_lahir,
            'partai' => $request->partai,
            'alamat' => $request->alamat,
            'kota' => $request->kota,
            'provinsi' => $request->provinsi,
            'kode_pos' => $request->kode_pos,
            'visi_misi' => $request->visi_misi,
            'pendidikan' => $request->pendidikan,
            'pengalaman_kerja' => $request->pengalaman_kerja,
            'organisasi' => $request->organisasi,
            'prestasi' => $request->prestasi,
        ]);

        return redirect()->back()->with('success', 'Portofolio berhasil dikirim');
    }
    public function daftarPortofolio()
    {
        $reports = Portofolio::where('user_id', Auth::id())->get();
        return view('partai.daftar_portofolio', compact('reports'));
    }
    public function edit($id)
    {
        $portofolio = Portofolio::findOrFail($id);
        return view('partai.edit_portofolio', compact('portofolio'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'jabatan' => 'required',
            'foto' => 'image|mimes:jpeg,png,jpg,gif',
            'nama_lengkap' => 'required',
            'jenis_kelamin' => 'required',
            'tempat_tanggal_lahir' => 'required',
            'partai' => 'required',
            'alamat' => 'required',
            'kota' => 'required',
            'provinsi' => 'required',
            'kode_pos' => 'required',
            'visi_misi' => 'required',
            'pendidikan' => 'required',
            'pengalaman_kerja' => 'required',
            'organisasi' => 'required',
            'prestasi' => 'required',
        ]);

        $portofolio = Portofolio::findOrFail($id);

        if ($request->hasFile('foto')) {
            if ($portofolio->foto && Storage::exists('public/' . $portofolio->foto)) {
                Storage::delete('public/' . $portofolio->foto);
            }
            $photoPath = $request->file('foto')->store('photos', 'public');
            $portofolio->foto = $photoPath;
        }

        $portofolio->update($request->except('foto'));

        return redirect()->route('partai.portofolio')->with('success', 'Portofolio berhasil diperbarui');
    }

    public function destroy($id)
    {
        $portofolio = Portofolio::findOrFail($id);
        if ($portofolio->foto && Storage::exists('public/' . $portofolio->foto)) {
            Storage::delete('public/' . $portofolio->foto);
        }
        $portofolio->delete();
        return redirect()->route('partai.portofolio')->with('success', 'Portofolio berhasil dihapus');
    }
}
