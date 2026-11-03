<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Pendaftar;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    /**
     * Menyimpan data pendaftaran baru dari API Postman (Format JSON / Raw).
     */
    public function store(Request $request)
    {
        // 1. Validasi semua data inputan dari request JSON
        $validated = $request->validate([
            'nama'          => 'required|string|max:255',
            'alamat'        => 'required|string',
            'tempat_lahir'  => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'hobi'          => 'required|string|max:255',
            'foto'          => 'required|string|max:255', // Berupa teks/nama file (misal: "default.jpg")
            'nama_ayah'     => 'required|string|max:255',
            'asal_sekolah'  => 'required|string|max:255',
            'no_hp'         => 'required|string|max:15',
            'alamat_email'  => 'required|email|max:255',
            'nik'           => 'required|string|size:16|unique:pendaftars,nik',
        ]);

        // 2. Simpan data ke dalam tabel database 'pendaftars'
        $pendaftar = Pendaftar::create($validated);

        // 3. Kembalikan respons sukses berformat JSON dengan status 201 (Created)
        return response()->json([
            'success' => true,
            'message' => 'Data pendaftaran berhasil disimpan!',
            'data'    => $pendaftar
        ], 201);
    }
}