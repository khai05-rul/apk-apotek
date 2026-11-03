<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // <-- Tambahkan baris ini!

class ProdukController extends Controller
{
    public function index()
    {
        // Mengambil data menggunakan Query Builder
        $produk = DB::table('produks')->get();

        // Mengirimkan data ke view produk.show
        return view('produk.show', compact('produk'));
    }
}