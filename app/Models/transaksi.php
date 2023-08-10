<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    use HasFactory;

    public function barang()
    {
        return $this->hasMany(barang::class);
    }

    public function pelanggan()
    {
        return $this->hasOne(pelanggan::class);
    }

    public function admin()
    {
        return $this->hasOne(admin::class);
    }

    public function riwayat()
    {
        return $this->belongsTo(riwayat::class);
    }
}
