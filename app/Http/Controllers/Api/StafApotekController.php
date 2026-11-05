<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\StafApotek; // atau Staf tergantung nama model Anda
use Illuminate\Http\Request;

class StafApotekController extends Controller
{
    // Fungsi GET untuk menampilkan semua data staf apotek
    public function index()
    {
        $staf = StafApotek::all();
        return response()->json([
            'status' => 'success',
            'data' => $staf
        ], 200);
    }

    // Fungsi POST untuk menyimpan data staf apotek baru
    public function store(Request $request)
    {
        $staf = StafApotek::create($request->all());
        return response()->json([
            'status' => 'success',
            'message' => 'Data staf apotek berhasil disimpan',
            'data' => $staf
        ], 201);
    }
}