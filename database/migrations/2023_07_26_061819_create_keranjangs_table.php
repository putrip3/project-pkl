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
        Schema::create('keranjangs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_barang'); // Kunci asing untuk relasi many-to-one
            $table->string('nama_barang', 50)->notNullable();
            $table->string('kategori', 15)->notNullable();
            $table->unsignedInteger('harga')->notNullable(); // Ubah tipe data menjadi 'unsignedInteger'
            $table->unsignedInteger('qty')->notNullable();  // Ubah tipe data menjadi 'unsignedInteger'
            $table->timestamps();
            $table->foreign('id_barang')->references('id')->on('barangs')->onDelete('cascade');
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keranjangs');
    }
};
