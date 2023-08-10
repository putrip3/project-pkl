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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->string('nama_admin', 50)->notNullable();
            $table->unsignedBigInteger('admin_id');
            $table->string('nama_pelanggan', 50)->notNullable();
            $table->unsignedBigInteger('user_id');
            $table->string('alamat', 50)->notNullable();
            $table->string('no_tlp', 15)->notNullable();
            $table->unsignedBigInteger('id_barang');
            $table->unsignedInteger('harga')->notNullable(); // Ubah tipe data menjadi 'unsignedInteger'
            $table->unsignedInteger('qty')->notNullable();  // Ubah tipe data menjadi 'unsignedInteger'
            $table->unsignedInteger('total_harga')->notNullable(); // Ubah tipe data menjadi 'unsignedInteger'
            $table->timestamps();
            $table->foreign('admin_id')->references('id')->on('admins')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('uerss')->onDelete('cascade');
            $table->foreign('id_barang')->references('id')->on('barangs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksis');
    }
};
