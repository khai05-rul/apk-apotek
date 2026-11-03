<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\StafApotek;
use Illuminate\Http\Request;

class StafApotekController extends Controller
{
    public function store(Request $request) {
        $validated = $request->validate([
            'id_staff' => 'required|unique:staf_apoteks',
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string',
            'tanggal_lahir' => 'required|date',
            'tempat_lahir' => 'required|string|max:255',
            'no_hp' => 'required|string|max:15',
        ]);

        $staf = StafApotek::create($validated);
        return response()->json([
            'success' => true,
            'message' => 'Data staf apotek berhasil disimpan',
            'data' => $staf
        ], 201);
    }
}