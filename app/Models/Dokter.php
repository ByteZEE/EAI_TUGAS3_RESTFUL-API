<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;

    // protected $guarded = ['id'];
    // protected $table = 'dokters';
    // protected $fillable = ['nama_dokter', 'alamat_dokter', 'nomor_telepon', 'spesialis_dokter'];

    public function pasien() {
        return $this->hasMany(Pasien::class, 'foreign_key');
    }

    public function rawat() {
        return $this->hasOne(Rawat::class);
    }
}
