@extends('layouts.layout')

@section('title', 'Galeri')

@section('content')
<div class="container py-5">
    <h2 class="text-center mb-4">Galeri Kegiatan Desa</h2>
    <p class="text-center text-muted mb-5">Dokumentasi foto kegiatan dan momen penting di Desa Cintalaksana</p>

    <!-- Form Pencarian Galeri -->
    <form action="/galeri" method="GET" class="mb-5">
        <div class="input-group">
            <input type="text" name="cari" class="form-control" placeholder="Cari galeri kegiatan..." aria-label="Cari galeri" aria-describedby="cari-button">
            <button class="btn btn-success" type="submit" id="cari-button">Cari</button>
        </div>
    </form>

    <!-- Kartu Galeri -->
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('images/galeri/gotong-royong.jpg') }}" class="card-img-top" alt="Gotong Royong">
                <div class="card-body">
                    <h5 class="card-title">Gotong Royong Warga</h5>
                    <p class="card-text text-muted small">10 Juli 2025</p>
                    <p class="card-text">Warga bergotong-royong membersihkan lingkungan demi kenyamanan bersama.</p>
                    <a href="/galeri/gotong-royong" class="btn btn-outline-success btn-sm">Lihat Selengkapnya</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('images/galeri/umkm.jpg') }}" class="card-img-top" alt="UMKM">
                <div class="card-body">
                    <h5 class="card-title">Pelatihan UMKM</h5>
                    <p class="card-text text-muted small">20 Juni 2025</p>
                    <p class="card-text">Pelatihan UMKM untuk meningkatkan ekonomi warga Desa Cintalaksana.</p>
                    <a href="/galeri/pelatihan-umkm" class="btn btn-outline-success btn-sm">Lihat Selengkapnya</a>
                </div>
            </div>
        </div>

        <!-- Tambah lebih banyak kartu galeri di sini -->
    </div>
</div>
@endsection