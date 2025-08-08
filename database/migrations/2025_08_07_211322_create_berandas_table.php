<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBerandasTable extends Migration
{
    public function up(): void
    {
        Schema::create('berandas', function (Blueprint $table) {
            $table->id();
            $table->string('judul_sambutan');
            $table->text('isi_sambutan');
            $table->string('nama_kepala_desa');
            $table->string('foto_kepala_desa');
            $table->integer('jumlah_penduduk');
            $table->integer('jumlah_dusun');
            $table->integer('jumlah_umkm');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('berandas');
    }
}