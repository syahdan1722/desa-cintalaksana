<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ProfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        DB::table('profils')->insert([
            'nama_desa' => 'Desa ' . $faker->citySuffix(),
            'alamat' => $faker->address,
            'email' => $faker->unique()->safeEmail,
            'telp' => $faker->phoneNumber,
            'website' => $faker->domainName,
            'visi' => $faker->sentence(12),
            'misi' => $faker->paragraph(2),
            'struktur_desa' => 'struktur_dummy.png',
            'kepala_desa' => $faker->name(),
            'beranda' => $faker->paragraphs(3, true),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
