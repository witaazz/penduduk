<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KartuKeluarga extends Model
{
    use HasFactory;
    protected $table = 'kartu_keluarga';
    protected $fillable = ['nokk', 'foto_kk'];

    public function penduduk()
    {
        return $this->hasMany(Penduduk::class, 'nokk', 'nokk');
    }
}
