<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    // Fungsi GET untuk menampilkan semua data pelanggan
    public function index()
    {
        $pelanggan = Pelanggan::all();
        return response()->json([
            'status' => 'success',
            'data' => $pelanggan
        ], 200);
    }

    // Fungsi POST untuk menyimpan data pelanggan baru
    public function store(Request $request)
    {
        $pelanggan = Pelanggan::create($request->all());
        return response()->json([
            'status' => 'success',
            'message' => 'Data pelanggan berhasil disimpan',
            'data' => $pelanggan
        ], 201);
    }
}