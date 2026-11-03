<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function store(Request $request) {
        $validated = $request->validate([
            'id_pelanggan' => 'required|unique:pelanggans',
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string',
            'no_hp' => 'required|string|max:15',
        ]);

        $pelanggan = Pelanggan::create($validated);
        return response()->json([
            'success' => true,
            'message' => 'Data pelanggan berhasil disimpan',
            'data' => $pelanggan
        ], 201);
    }
}