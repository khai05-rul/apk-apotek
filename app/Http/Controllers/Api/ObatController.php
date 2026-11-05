<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Obat;
use Illuminate\Http\Request;

class ObatController extends Controller
{
    // Fungsi GET untuk menampilkan semua data obat
    public function index()
    {
        $obat = Obat::all();
        return response()->json([
            'status' => 'success',
            'data' => $obat
        ], 200);
    }

    // Fungsi POST untuk menyimpan data obat baru
    public function store(Request $request)
    {
        $obat = Obat::create($request->all());
        return response()->json([
            'status' => 'success',
            'message' => 'Data obat berhasil disimpan',
            'data' => $obat
        ], 201);
    }
}