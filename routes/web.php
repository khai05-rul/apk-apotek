<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PendaftarController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/produk', [ProdukController::class, 'index'])->name('produk.index');
Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
Route::get('/pendaftaran', [PendaftarController::class, 'create'])->name('pendaftaran.create');
Route::post('/pendaftaran', [PendaftarController::class, 'store'])->name('pendaftaran.store');