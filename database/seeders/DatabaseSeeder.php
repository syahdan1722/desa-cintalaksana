<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            BeritaSeeder::class,
            WisataSeeder::class,
            LayananSeeder::class,
            GaleriSeeder::class,
            ProfilSeeder::class,

        ]);
    }
}
