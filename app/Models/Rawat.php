<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rawat extends Model
{
    use HasFactory;

    public function pasien() {
        return $this->hasOne(Pasien::class);
    }

    public function dokter() {
        return $this->hasOne(Dokter::class);
    }

    public function ruang() {
        return $this->hasOne(Ruang::class);
    }
}
