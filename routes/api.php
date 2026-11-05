<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PelangganController;
use App\Http\Controllers\Api\StafApotekController;
use App\Http\Controllers\Api\ObatController;

// Rute untuk Pelanggan (GET & POST)
Route::get('/pelanggan', [PelangganController::class, 'index']);
Route::post('/pelanggan', [PelangganController::class, 'store']);

// Rute untuk Staf Apotek (GET & POST)
Route::get('/staf-apotek', [StafApotekController::class, 'index']);
Route::post('/staf-apotek', [StafApotekController::class, 'store']);

// Rute untuk Obat (GET & POST)
Route::get('/obat', [ObatController::class, 'index']);
Route::post('/obat', [ObatController::class, 'store']);