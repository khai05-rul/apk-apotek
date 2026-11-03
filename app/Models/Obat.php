<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    // Menyesuaikan nama tabel
    protected $table = 'obats';

    protected $fillable = [
        'kode_obat',
        'nama_obat',
        'stock_obat',
        'tanggal_kadaluarsa'
    ];
}