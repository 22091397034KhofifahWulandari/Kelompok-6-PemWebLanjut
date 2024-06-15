<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\UserDashboardController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\PartaiDashboardController;
use App\Http\Controllers\User\UserProfileController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\Partai\PartaiProfileController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PelaporanController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\Admin\AdminPengaduanController;
use App\Http\Controllers\PublicPengaduanController;
use App\Http\Controllers\PengaduanrinciController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\CoblosPemiluController;


use App\Http\Controllers\PublicPelaporanController;

Route::get('/publik/{userId}', [PublicPelaporanController::class, 'showByUser'])->name('publik.all_reports');


Route::get('/user/coblos', [CoblosPemiluController::class, 'index'])->name('user.coblos.coblos_pemilu');
Route::get('/user/coblos', [CoblosPemiluController::class, 'create'])->name('user.coblos.coba');



Route::get('/pengaduanrinci/{id}', [PengaduanrinciController::class, 'pengaduanrinci'])->name('pengaduanrinci');


Route::get('/kelompok5', [PublicPengaduanController::class, 'kelompok5'])->name('kelompok5');
Route::get('/pengaduan/{id}', [PublicPengaduanController::class, 'pengaduanrinci'])->name('pengaduan.rinci');


Route::prefix('admin')->name('admin.')->group(function() {
    Route::get('/pengaduan', [AdminPengaduanController::class, 'index'])->name('pengaduan.index');
    Route::post('/pengaduan/{id}/update', [AdminPengaduanController::class, 'update'])->name('pengaduan.update');
    Route::delete('/pengaduan/{id}', [AdminPengaduanController::class, 'destroy'])->name('pengaduan.destroy');
});

// Grup rute dengan middleware auth untuk otentikasi

// User Profile
Route::get('/userprofile', [WelcomeController::class, 'userprofile'])->name('userprofile');

// About
Route::get('/about', [WelcomeController::class, 'about'])->name('about');

// Publications
Route::get('/publication', [WelcomeController::class, 'publication'])->name('publication');

// Login Parpol
Route::get('/loginparpol', [WelcomeController::class, 'loginparpol'])->name('loginparpol');


// Kelompok 6
Route::get('/kelompok6', [WelcomeController::class, 'kelompok6'])->name('kelompok6');

// Kelompok 8
Route::get('/kelompok8', [WelcomeController::class, 'kelompok8'])->name('kelompok8');

// FAQs
Route::get('/faqs', [WelcomeController::class, 'faqs'])->name('faqs');

// Kelompok 5 User
Route::get('/kelompok5user', [WelcomeController::class, 'kelompok5user'])->name('kelompok5user');

// Kelompok 4
Route::get('/kelompok4', [WelcomeController::class, 'kelompok4'])->name('kelompok4');

// Kelompok 6 User
Route::get('/kelompok6user', [WelcomeController::class, 'kelompok6user'])->name('kelompok6user');

// Kelompok 7
Route::get('/kelompok7', [WelcomeController::class, 'kelompok7'])->name('kelompok7');

// Beranda Parpol
Route::get('/berandaparpol', [WelcomeController::class, 'berandaparpol'])->name('berandaparpol');


Route::middleware('auth:partai')->group(function () {
    Route::get('/partai/profile', [PartaiProfileController::class, 'showProfile'])->name('partai.profile');
});

Route::middleware('auth:admin')->group(function () {
    Route::get('/admin/profile', [AdminProfileController::class, 'showProfile'])->name('admin.profile');
});


// Rute untuk halaman registrasi
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

// Rute untuk halaman login dan logout
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Rute untuk halaman selamat datang
Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('/', function () {
    return view('welcome');
})->name('home');

// Rute untuk dashboard dan profil pengguna dengan middleware auth:user
Route::middleware('auth:user')->group(function () {
    Route::get('/user/dashboard', [UserDashboardController::class, 'index'])->name('user.dashboard');
    Route::get('/user/profile', [UserProfileController::class, 'showProfileForm'])->name('user.profile');
    Route::put('/user/profile', [UserProfileController::class, 'updateProfile'])->name('user.profile.update');

    // Menampilkan daftar pengaduan
    Route::get('/pengaduan', [PengaduanController::class, 'index'])->name('user.aduan.pengaduan');

    // Menampilkan form pengaduan baru
    Route::get('/pengaduan/create', [PengaduanController::class, 'create'])->name('pengaduan.create');

    // Menyimpan pengaduan baru
    Route::post('/pengaduan', [PengaduanController::class, 'store'])->name('pengaduan.store');
    Route::post('/kirim-aduan', [PengaduanController::class, 'store'])->name('kirim-aduan');

    Route::get('/aduan-saya', [MasyarakatController::class, 'show'])->name('aduan-saya');
    Route::get('/semua-aduan', [PengaduanController::class, 'index'])->name('semua-aduan');
    Route::get('/detail-aduan/{id}', [PengaduanController::class, 'show'])->name('detail-aduan');
    Route::get('/pengaduan/{id}', [PengaduanController::class, 'show'])->name('pengaduan.show');
    Route::delete('/pengaduan/{id}', [PengaduanController::class, 'destroy'])->name('pengaduan.destroy');
});
Route::get('/admin/userlist', [AdminDashboardController::class, 'userList'])->name('admin.userlist');
Route::delete('/admin/user/{user}', [AdminDashboardController::class, 'destroy'])->name('delete.user');
Route::get('/admin/partai', [PartaiDashboardController::class, 'partaiList'])->name('admin.partailist');
Route::get('/admin/users', [AdminDashboardController::class, 'userList'])->name('admin.userlist');
// Rute untuk dashboard admin dengan middleware auth:admin
Route::middleware(['auth:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
});

// Rute untuk dashboard partai dengan middleware auth:partai
Route::middleware(['auth:partai'])->group(function () {
    Route::get('/partai/dashboard', [PartaiDashboardController::class, 'index'])->name('partai.dashboard');
});

// Rute untuk dashboard umum dengan middleware auth dan checkIfAuthenticated
Route::middleware('auth:partai')->group(function () {
    Route::get('partai/dashboard', function () {
        return view('partai.dashboard');
    })->name('partai.dashboard');

    Route::get('partai/beranda-parpol', [CandidateController::class, 'index'])->name('partai.beranda-parpol');
    Route::get('partai/daftar-caleg-registrasi', [CandidateController::class, 'daftarCalegRegistrasi'])->name('partai.daftar-caleg-registrasi');
    Route::get('candidates/create', [CandidateController::class, 'create'])->name('candidates.create');
    Route::post('candidates', [CandidateController::class, 'store'])->name('candidates.store');
    Route::get('/candidates/{id}/edit', [CandidateController::class, 'edit'])->name('partai.edit');
    Route::put('/candidates/{id}', [CandidateController::class, 'update'])->name('partai.update');
    Route::delete('/candidates/{id}', [CandidateController::class, 'destroy'])->name('partai.destroy');
    Route::get('partai/pelaporan', [PelaporanController::class, 'pelaporan'])->name('partai.pelaporan');
    Route::post('partai/pelaporan', [PelaporanController::class, 'store'])->name('pelaporan.store');
    Route::get('/pelaporan/list', [PelaporanController::class, 'index'])->name('pelaporan.list');
    Route::get('/daftar-pelaporan', [PelaporanController::class, 'daftarPelaporan'])->name('partai.daftar-pelaporan');
    Route::get('/pelaporan/{id}/edit', [PelaporanController::class, 'edit'])->name('partai.pelaporan.edit');
    Route::put('/pelaporan/{id}', [PelaporanController::class, 'update'])->name('partai.pelaporan.update');
    Route::delete('/pelaporan/{id}', [PelaporanController::class, 'destroy'])->name('partai.pelaporan.destroy');
    Route::get('/portofolio', [PortofolioController::class, 'portofolio'])->name('partai.portofolio');
    Route::get('/daftar_portofolio', [PortofolioController::class, 'daftarPortofolio'])->name('partai.daftar_portofolio');
    Route::post('/portofolio/store', [PortofolioController::class, 'store'])->name('portofolio.store');
    Route::get('/portofolio/edit/{id}', [PortofolioController::class, 'edit'])->name('portofolio.edit');
    Route::put('/portofolio/update/{id}', [PortofolioController::class, 'update'])->name('portofolio.update');
    Route::delete('/portofolio/destroy/{id}', [PortofolioController::class, 'destroy'])->name('portofolio.destroy');
    Route::post('/logout', function() {
        Auth::logout();
        return redirect('/login');
    })->name('logout');
});