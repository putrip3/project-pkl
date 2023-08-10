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
        Schema::create('uerss', function (Blueprint $table) {
            $table->id();
            $table->string('nama_user', 50)->notNullable();
            $table->string('username', 15)->notNullable();
            $table->string('password', 6)->notNullable();
            $table->string('no_tlp', 15)->notNullable();
            $table->string('alamat', 50)->notNullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('uerss');
    }
};
