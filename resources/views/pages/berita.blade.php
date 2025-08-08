@extends('layouts.layout')

@section('title', 'Berita')

@section('content')
<div class="container py-5">
    <h1 class="mb-4 text-center">Berita Desa Cintalaksana</h1>

    <!-- Pencarian & Filter -->
    <div class="row mb-4">
        <div class="col-md-6">
            <input type="text" class="form-control" placeholder="Cari berita...">
        </div>
        <div class="col-md-6">
            <select class="form-select">
                <option selected>Semua Kategori</option>
                <option value="umkm">UMKM</option>
                <option value="kegiatan">Kegiatan Warga</option>
                <option value="pembangunan">Pembangunan</option>
            </select>
        </div>
    </div>

    <!-- List Berita -->
    <div class="row g-4">
        <!-- Contoh berita -->
        <div class="col-md-6 col-lg-4">
            <div class="card h-100 border-0 shadow-sm">
                <img src="/img/slider2-desa.jpg" class="card-img-top" alt="Berita 1">
                <div class="card-body">
                    <h5 class="card-title">Gotong Royong Warga</h5>
                    <p class="card-text">Warga membersihkan jalan untuk persiapan HUT RI ke-80.</p>
                    <a href="/berita/gotong-royong" class="btn btn-sm btn-success">Baca Selengkapnya</a>
                </div>
            </div>
        </div>

        <!-- Tambahkan lebih banyak berita dummy di sini -->
        <div class="col-md-6 col-lg-4">
            <div class="card h-100 border-0 shadow-sm">
                <img src="/img/berita2.jpg" class="card-img-top" alt="Berita 2">
                <div class="card-body">
                    <h5 class="card-title">Pelatihan UMKM</h5>
                    <p class="card-text">UMKM desa mendapat pelatihan digitalisasi usaha dari mahasiswa KKN.</p>
                    <a href="/berita/pelatihan-umkm" class="btn btn-sm btn-success">Baca Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection