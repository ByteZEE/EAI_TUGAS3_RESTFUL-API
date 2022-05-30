<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;

    public function petugas() {
        return $this->belongsTo(Petugas::class);
    }

    public function pasien() {
        return $this->hasOne(Pasien::class);
    }
}
