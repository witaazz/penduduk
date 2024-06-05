<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    use HasFactory;
    protected $table = 'penduduk';
    protected $fillable = ['nik', 'nokk', 'nama_lengkap', 'tempat_lahir', 'tanggal_lahir', 'jenis_kelamin', 'agama', 'goldar', 'pendidikan_terakhir', 'id_pekerjaan', 'status_pernikahan', 'id_kelurahan', 'id_kecamatan', 'id_kabupaten', 'id_provinsi'];

    public function kartuKeluarga()
    {
        return $this->belongsTo(KartuKeluarga::class, 'nokk', 'nokk');
    }
}
