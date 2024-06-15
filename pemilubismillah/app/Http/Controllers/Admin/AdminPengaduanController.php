<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PengaduanUser;
use Illuminate\Http\Request;

class AdminPengaduanController extends Controller
{
    // Method for displaying admin page with complaints
    public function index()
    {
        $pengaduans = PengaduanUser::all();
        return view('admin.pengaduan.index', compact('pengaduans'));
    }

    // Method for updating complaint status and response
    public function update(Request $request, $id)
    {
        $pengaduan = PengaduanUser::findOrFail($id);

        if ($request->has('status')) {
            $pengaduan->status = $request->input('status');
        }

        if ($request->has('response')) {
            $pengaduan->response = $request->input('response');
        }

        $pengaduan->save();

        return redirect()->route('admin.pengaduan.index')->with('success', 'Pengaduan updated successfully');
    }

    // Method for deleting a complaint
    public function destroy($id)
    {
        $pengaduan = PengaduanUser::findOrFail($id);
        $pengaduan->delete();

        return redirect()->route('admin.pengaduan.index')->with('success', 'Pengaduan deleted successfully');
    }
}
