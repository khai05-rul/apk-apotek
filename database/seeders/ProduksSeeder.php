<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProduksSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('produks')->insert([
            [
                'nama_produk'      => 'Smart TV Samsung 24 inch',
                'harga'            => 2000000,
                'stok'             => 10,
                'deskripsi_produk' => 'Ini adalah sebuah deskripsi dummy',
                'kategori_id'      => 2,
                'created_at'       => now(),
                'updated_at'       => now(),
            ],
            [
                'nama_produk'      => 'Laptop Lenovo',
                'harga'            => 5000000,
                'stok'             => 5,
                'deskripsi_produk' => 'Deskripsi Laptop Lenovo',
                'kategori_id'      => 1,
                'created_at'       => now(),
                'updated_at'       => now(),
            ],
            [
                'nama_produk'      => 'Smart Watch',
                'harga'            => 750000,
                'stok'             => 15,
                'deskripsi_produk' => 'Deskripsi Smart Watch',
                'kategori_id'      => 2,
                'created_at'       => now(),
                'updated_at'       => now(),
            ],
        ]);
    }
}