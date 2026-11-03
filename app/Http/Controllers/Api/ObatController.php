<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Obat;
use Illuminate\Http\Request;

class ObatController extends Controller
{
    public function store(Request $request) {
        $validated = $request->validate([
            'kode_obat' => 'required|unique:obats',
            'nama_obat' => 'required|string|max:255',
            'stock_obat' => 'required|integer',
            'tanggal_kadaluarsa' => 'required|date',
        ]);

        $obat = Obat::create($validated);
        return response()->json([
            'success' => true,
            'message' => 'Data obat berhasil disimpan',
            'data' => $obat
        ], 201);
    }
}