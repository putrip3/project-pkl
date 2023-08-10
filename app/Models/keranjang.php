<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class keranjang extends Model
{
    use HasFactory;
    // Definisikan relasi one-to-many ke model "barang"
    public function barang()
    {
        return $this->hasMany(barang::class);
    }
}
