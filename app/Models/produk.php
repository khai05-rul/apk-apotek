<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    // 1. Inisialisasi nama tabel di database
    protected $table = 'produks';

    // 2. Inisialisasi primary key custom
    protected $primaryKey = 'id_produk';

    // 3. Inisialisasi kolom yang TIDAK boleh diisi (ID Produk otomatis)
    protected $guarded = ['id_produk'];
}