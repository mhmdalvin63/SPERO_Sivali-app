<?php

use App\Models\kategoriBarang;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('barangs', function (Blueprint $table) {
            $table->id();
            $table->string('gambar_barang');
            $table->foreignId('id_kategori')->references('id')->on('kategori_barangs')->onDelete('cascade');
            $table->string('judul_barang', 100);
            $table->string('deskripsi');
            $table->string('harga', 100);
            $table->string('rate', 5);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barangs');
    }
};
