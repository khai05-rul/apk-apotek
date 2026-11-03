<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
{
    Schema::create('kategori', function (Blueprint $table) {
        $table->id('id_kategori'); // Primary key [00:12:26]
        $table->string('nama_kategori', 100); // Nama kategori max 100 karakter [00:13:15]
        $table->text('deskripsi'); // Deskripsi kategori [00:13:34]
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kategori');
    }
};
