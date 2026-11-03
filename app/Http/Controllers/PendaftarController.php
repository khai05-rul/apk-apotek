<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftar;

class PendaftarController extends Controller
{
    public function create()
    {
        return view('Pendaftaran.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required',
            'tempat_lahir' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'hobi' => 'required|string|max:255',
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'no_hp' => 'required|string|max:15',
            'alamat_email' => 'required|email|max:255',
            'nama_ayah' => 'required|string|max:255',
            'asal_sekolah' => 'required|string|max:255',
            'nik' => 'required|string|size:16|unique:pendaftaran,nik',
        ]);

        $fotoPath = null;
        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('foto_pendaftar', 'public');
        }

       Pendaftar::create([
    'nama' => $request->nama,
    'alamat' => $request->alamat,
    'tempat_lahir' => $request->tempat_lahir,
    'tanggal_lahir' => $request->tanggal_lahir,
    'hobi' => $request->hobi,
    'foto' => $fotoPath,
    'no_hp' => $request->no_hp,             // Diperbaiki dari string aturan validasi menjadi request value
    'alamat_email' => $request->alamat_email, // Diperbaiki dari string aturan validasi menjadi request value
    'nama_ayah' => $request->nama_ayah,
    'asal_sekolah' => $request->asal_sekolah,
    'nik' => $request->nik,

        ]);

        return response()->json([
    'success' => true,
    'message' => 'Data pendaftaran berhasil disimpan!'
], 201);
    }
}