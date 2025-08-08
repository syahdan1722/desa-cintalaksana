<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Tambahkan kolom struktur_desa ke tabel profils.
     */
    public function up(): void
    {
        Schema::table('profils', function (Blueprint $table) {
            $table->string('struktur_desa')->nullable(); // Hapus ->after('misi')
        });
    }

    /**
     * Hapus kolom struktur_desa dari tabel profils jika rollback.
     */
    public function down(): void
    {
        Schema::table('profils', function (Blueprint $table) {
            if (Schema::hasColumn('profils', 'struktur_desa')) {
                $table->dropColumn('struktur_desa');
            }
        });
    }
};
