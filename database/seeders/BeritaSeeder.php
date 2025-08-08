<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class BeritaSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        for ($i = 0; $i < 10; $i++) {
            DB::table('beritas')->insert([
                'judul' => $faker->sentence(6, true),
                'isi' => $faker->paragraph(4),
                'tanggal' => $faker->dateTimeBetween('-1 years', 'now'),
                'gambar' => 'berita/1753900095_Gunung-Bromo-Jawa-Timur.jpg', // Gunakan path relatif terhadap public/storage
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
