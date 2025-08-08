<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class WisataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        for ($i = 0; $i < 10; $i++) {
            DB::table('wisatas')->insert([
                'nama' => 'Wisata ' . $faker->word,
                'deskripsi' => $faker->paragraph(3),
                'lokasi' => $faker->city . ', ' . $faker->state,
                'gambar' => '1753900095_Gunung-Bromo-Jawa-Timur.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
