<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;

    public function dokter() {
        return $this->belongsTo(Dokter::class);
    }

    public function rawat() {
        return $this->hasOne(Rawat::class);
    }

    public function pembayaran() {
        return $this->hasOne(Pembayaran::class);
    }
}
