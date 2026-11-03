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
    Schema::create('produks', function (Blueprint $table) {
        $table->id('id_produk');
        $table->string('nama_produk', 150);
        $table->integer('harga');
        $table->integer('stok')->default(0); // <-- Tambahkan baris ini
        $table->text('deskripsi_produk');
        $table->unsignedBigInteger('kategori_id');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produks');
    }
};
