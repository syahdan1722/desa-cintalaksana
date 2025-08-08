<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Layanan;
use Faker\Factory as Faker;

class LayananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Misalnya ingin membuat 5 layanan
        for ($i = 0; $i < 10; $i++) {
            Layanan::create([
                'judul' => 'Layanan ' . $faker->word(),
                'deskripsi' => $faker->sentence(10),
                'kontak' => $faker->phoneNumber(),
                'gambar' => null, // atau bisa juga $faker->imageUrl() jika butuh dummy gambar
            ]);
        }
    }
}
