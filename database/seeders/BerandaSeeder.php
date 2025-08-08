<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Beranda;

class BerandaSeeder extends Seeder
{
    public function run(): void
    {
        Beranda::create([
            'judul_sambutan' => 'Sambutan Kepala Desa',
            'isi_sambutan' => 'Assalamu’alaikum Warahmatullahi Wabarakatuh. Selamat datang di website resmi Desa Cintalaksana...',
            'nama_kepala_desa' => 'Agus Sulaiman',
            'foto_kepala_desa' => 'img/kepala-desa.jpg',
            'jumlah_penduduk' => 1520,
            'jumlah_dusun' => 4,
            'jumlah_umkm' => 7
        ]);
    }
}