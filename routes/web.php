<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PendaftarController;

use App\Models\Pelanggan;
use App\Models\StafApotek;
use App\Models\Obat;

use App\Http\Controllers\PelangganWebController;
use App\Http\Controllers\StafWebController;
use App\Http\Controllers\ObatWebController;

// ==========================================
// 1. KODE LAMA (TETAPKAN DAN JANGAN DIHAPUS)
// ==========================================
Route::get('/welcome-lama', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/produk', [ProdukController::class, 'index'])->name('produk.index');
Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
Route::get('/pendaftaran', [PendaftarController::class, 'create'])->name('pendaftaran.create');
Route::post('/pendaftaran', [PendaftarController::class, 'store'])->name('pendaftaran.store');


// ==========================================
// 2. APLIKASI WEB APOTEK (DASHBOARD & CRUD)
// ==========================================

// Halaman Dashboard Utama Apotek (Akses via '/' dan '/dashboard')
Route::get('/', function () {
    return view('dashboard', [
        'total_pelanggan' => Pelanggan::count(),
        'total_staf'      => StafApotek::count(),
        'total_obat'      => Obat::count(),
    ]);
});

Route::get('/dashboard', function () {
    return view('dashboard', [
        'total_pelanggan' => Pelanggan::count(),
        'total_staf'      => StafApotek::count(),
        'total_obat'      => Obat::count(),
    ]);
});


// --- CRUD Pelanggan ---
Route::get('/pelanggan', [PelangganWebController::class, 'index'])->name('pelanggan.index');
Route::get('/pelanggan/create', [PelangganWebController::class, 'create'])->name('pelanggan.create');
Route::post('/pelanggan', [PelangganWebController::class, 'store'])->name('pelanggan.store');
Route::get('/pelanggan/{id}/edit', [PelangganWebController::class, 'edit'])->name('pelanggan.edit');
Route::put('/pelanggan/{id}', [PelangganWebController::class, 'update'])->name('pelanggan.update');
Route::delete('/pelanggan/{id}', [PelangganWebController::class, 'destroy'])->name('pelanggan.destroy');


// --- CRUD Staf Apotek ---
Route::get('/staf-apotek', [StafWebController::class, 'index']);
Route::get('/staf-apotek/create', [StafWebController::class, 'create']);
Route::post('/staf-apotek', [StafWebController::class, 'store']);
Route::get('/staf-apotek/{id}/edit', [StafWebController::class, 'edit']);
Route::put('/staf-apotek/{id}', [StafWebController::class, 'update']);
Route::delete('/staf-apotek/{id}', [StafWebController::class, 'destroy']);


// --- CRUD Obat ---
Route::get('/obat', [ObatWebController::class, 'index']);
Route::get('/obat/create', [ObatWebController::class, 'create']);
Route::post('/obat', [ObatWebController::class, 'store']);
Route::get('/obat/{id}/edit', [ObatWebController::class, 'edit']);
Route::put('/obat/{id}', [ObatWebController::class, 'update']);
Route::delete('/obat/{id}', [ObatWebController::class, 'destroy']);