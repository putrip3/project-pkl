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
        Schema::create('barangs', function (Blueprint $table) {
            $table->id();
            $table->string('nama_barang', 50)->notNullable();
            $table->string('kategori', 15)->notNullable();
            $table->year('tahun')->notNullable(); // Ubah tipe data menjadi 'year'
            $table->string('artis', 50)->notNullable();
            $table->unsignedInteger('harga')->notNullable(); // Ubah tipe data menjadi 'unsignedInteger'
            $table->unsignedInteger('stok')->notNullable();  // Ubah tipe data menjadi 'unsignedInteger'
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
