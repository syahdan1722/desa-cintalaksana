@extends('layouts.layout')

@section('title', 'Detail Galeri')

@section('content')
<div class="container py-5">
    <a href="/galeri" class="btn btn-outline-success mb-4">< Kembali ke Galeri</a>

    <!-- Gambar Utama -->
    <div class="mb-4">
        <img src="{{ asset('images/galeri/gotong-royong.jpg') }}" class="img-fluid rounded shadow-sm w-100" alt="Gotong Royong">
    </div>

    <!-- Judul & Deskripsi -->
    <h2 class="mb-3">Kegiatan Gotong Royong Bersama Warga</h2>
    <p class="text-muted">Dipublikasikan pada 10 Juli 2025 oleh Admin Desa</p>

    <div class="mb-4">
        <p>
            Gotong royong adalah salah satu budaya yang masih sangat dijaga oleh masyarakat Desa Cintalaksana. 
            Dalam kegiatan ini, warga bersama-sama membersihkan saluran air, jalan desa, dan fasilitas umum lainnya. 
        </p>
        <p>
            Kegiatan ini dilakukan setiap bulan dan menjadi ajang silaturahmi antar warga serta memperkuat rasa kebersamaan. 
            Pemerintah Desa sangat mendukung kegiatan seperti ini sebagai bentuk partisipasi aktif masyarakat dalam membangun desa.
        </p>
    </div>

    <!-- Galeri Tambahan (opsional) -->
    <div class="row">
        <div class="col-md-4 mb-3">
            <img src="{{ asset('images/galeri/gotong-1.jpg') }}" class="img-fluid rounded" alt="Foto 1">
        </div>
        <div class="col-md-4 mb-3">
            <img src="{{ asset('images/galeri/gotong-2.jpg') }}" class="img-fluid rounded" alt="Foto 2">
        </div>
        <div class="col-md-4 mb-3">
            <img src="{{ asset('images/galeri/gotong-3.jpg') }}" class="img-fluid rounded" alt="Foto 3">
        </div>
    </div>
</div>
@endsection