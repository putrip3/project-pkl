<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    use HasFactory;
    // Definisikan relasi many-to-one ke model "Keranjang"
    public function keranjangs()
    {
        return $this->belongsTo(keranjang::class);
    }

    public function detail_pesanas()
    {
        return $this->belongsTo(detail_pesanan::class);
    }

    public function transaksis()
    {
        return $this->belongsTo(transaksi::class);
    }
}
