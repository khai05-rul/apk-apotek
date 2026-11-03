<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StafApotek extends Model
{
    // Menyesuaikan nama tabel jika bentuk plural aslinya berbeda
    protected $table = 'staf_apoteks';

    protected $fillable = [
        'id_staff',
        'nama',
        'alamat',
        'tanggal_lahir',
        'tempat_lahir',
        'no_hp'
    ];
}