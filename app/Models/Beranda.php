<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Beranda extends Model
{
    protected $fillable = [
        'judul_sambutan',
        'isi_sambutan',
        'nama_kepala_desa',
        'foto_kepala_desa',
        'jumlah_penduduk',
        'jumlah_dusun',
        'jumlah_umkm'
    ];
}