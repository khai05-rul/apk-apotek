<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PendaftaranController;
use App\Http\Controllers\Api\PelangganController;
use App\Http\Controllers\Api\StafApotekController;
use App\Http\Controllers\Api\ObatController;

Route::post('/register', [PendaftaranController::class, 'store']);
Route::post('/pelanggan', [PelangganController::class, 'store']);
Route::post('/staf', [StafApotekController::class, 'store']);
Route::post('/obat', [ObatController::class, 'store']);