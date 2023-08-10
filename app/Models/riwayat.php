<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class riwayat extends Model
{
    use HasFactory;

    public function transaksi()
    {
        return $this->hasMany(transaksi::class);
    }
}
