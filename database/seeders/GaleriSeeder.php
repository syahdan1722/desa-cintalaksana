<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class GaleriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            DB::table('galeris')->insert([
                'judul' => $faker->sentence,
                'deskripsi' => $faker->paragraph,
                'gambar' => '1753900095_Gunung-Bromo-Jawa-Timur.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
