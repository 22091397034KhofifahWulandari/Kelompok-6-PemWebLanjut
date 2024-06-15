<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
 
class WelcomeController extends Controller
{
    public function userprofile()
    {
        return view('coblospemilu.userprofile');
    }
 
    public function about()
    {
        return view('publik.about');
    }

    public function publication()
    {
        return view('publik.publication');
    }
    public function loginparpol()
    {
        return view('publik.kelompok3.loginparpol');
    }
    
    public function kelompok6()
    {
        return view('publik.kelompok6');
    }
  
    public function kelompok8()
    {
        return view('publik.kelompok8');
    }
  
    
    public function faqs()
    {
        return view('publik.faqs');
    }
    public function kelompok5user()
    {
        return view('coblospemilu.kelompok5user');
    }
    public function kelompok4()
    {
        return view('coblospemilu.kelompok4');
    }
    public function kelompok6user()
    {
        return view('coblospemilu.kelompok6user');
    }
    public function kelompok7()
    {
        return view('coblospemilu.kelompok7');
    }
    public function berandaparpol()
    {
        return view('publik.kelompok3.halaman-parpol');
    }
    public function index()
    {
        // Ambil semua data pengaduan dari database
        $pengaduans = PengaduanUser::all(); 

        // Kirim data pengaduan ke tampilan
        return view('publik.kelompok5', compact('pengaduans'));
    }
  
}