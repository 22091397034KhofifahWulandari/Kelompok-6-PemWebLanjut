<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CandidateController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $userId = Auth::id();
        $userCalegCount = Candidate::where('user_id', $userId)->count();
        $candidates = Candidate::where('user_id', $userId)->get();
        return view('partai.beranda-parpol', compact('candidates', 'userCalegCount'));
    }

    public function daftarCalegRegistrasi()
    {
        $userId = Auth::id();
        $candidates = Candidate::where('user_id', $userId)->get();
        return view('partai.daftar-caleg-registrasi', compact('candidates'));
    }

    public function create()
    {
        return view('candidates.create');
    }

    public function store(Request $request)
    {
        $userId = auth()->user()->id;
        $userCalegCount = Candidate::where('user_id', $userId)->count();

        if ($userCalegCount >= 5) {
            return redirect()->back()->with('error', 'Anda hanya bisa mengunggah maksimal 5 caleg.');
        }

        $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string',
            'formulir' => 'required|file|mimes:pdf,doc,docx,jpg,jpeg,png',
            'ktp' => 'required|file|mimes:pdf,doc,docx,jpg,jpeg,png',
            'ijazah' => 'required|file|mimes:pdf,doc,docx,jpg,jpeg,png',
            'surat_pernyataan' => 'required|file|mimes:pdf,doc,docx,jpg,jpeg,png',
            'surat_bebas_narkoba' => 'required|file|mimes:pdf,doc,docx,jpg,jpeg,png',
        ]);

        $candidate = new Candidate();
        $candidate->name = $request->name;
        $candidate->position = $request->position;
        $candidate->formulir = $request->file('formulir')->store('formulirs', 'public');
        $candidate->ktp = $request->file('ktp')->store('ktps', 'public');
        $candidate->ijazah = $request->file('ijazah')->store('ijazahs', 'public');
        $candidate->surat_pernyataan = $request->file('surat_pernyataan')->store('surat_pernyataans', 'public');
        $candidate->surat_bebas_narkoba = $request->file('surat_bebas_narkoba')->store('surat_bebas_narkobas', 'public');
        $candidate->user_id = $userId;
        $candidate->save();

        return redirect()->back()->with('success', 'Data berhasil disimpan!');
    }

    public function edit($id)
    {
        $candidate = Candidate::where('user_id', Auth::id())->findOrFail($id);
        return view('candidates.edit', compact('candidate'));
    }

    public function update(Request $request, $id)
    {
        $candidate = Candidate::where('user_id', Auth::id())->findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string',
            'formulir' => 'nullable|file|mimes:pdf,doc,docx,jpg,jpeg,png',
            'ktp' => 'nullable|file|mimes:pdf,doc,docx,jpg,jpeg,png',
            'ijazah' => 'nullable|file|mimes:pdf,doc,docx,jpg,jpeg,png',
            'surat_pernyataan' => 'nullable|file|mimes:pdf,doc,docx,jpg,jpeg,png',
            'surat_bebas_narkoba' => 'nullable|file|mimes:pdf,doc,docx,jpg,jpeg,png',
        ]);

        $candidate->name = $request->name;
        $candidate->position = $request->position;

        if ($request->hasFile('formulir')) {
            $candidate->formulir = $request->file('formulir')->store('formulirs', 'public');
        }

        if ($request->hasFile('ktp')) {
            $candidate->ktp = $request->file('ktp')->store('ktps', 'public');
        }

        if ($request->hasFile('ijazah')) {
            $candidate->ijazah = $request->file('ijazah')->store('ijazahs', 'public');
        }

        if ($request->hasFile('surat_pernyataan')) {
            $candidate->surat_pernyataan = $request->file('surat_pernyataan')->store('surat_pernyataans', 'public');
        }

        if ($request->hasFile('surat_bebas_narkoba')) {
            $candidate->surat_bebas_narkoba = $request->file('surat_bebas_narkoba')->store('surat_bebas_narkobas', 'public');
        }

        $candidate->save();

        return redirect()->route('partai.daftar-caleg-registrasi')->with('success', 'Data berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $candidate = Candidate::where('user_id', Auth::id())->findOrFail($id);
        $candidate->delete();

        return redirect()->route('partai.daftar-caleg-registrasi')->with('success', 'Data berhasil dihapus!');
    }
}
