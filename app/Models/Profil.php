<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    protected $fillable = [
        'nama_desa',
        'visi',
        'misi',
        'struktur_desa',
        'kepala_desa',
        'beranda',
    ];
}
