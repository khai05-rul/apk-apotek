<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function index()
    {
        // Mengambil data dari tabel mahasiswa
        $mahasiswa = DB::table('mahasiswa')->get();

        // Memanggil file view resources/views/mahasiswa/index.blade.php
        return view('mahasiswa.index', compact('mahasiswa'));
    }
}