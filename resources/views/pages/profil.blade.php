@extends('layouts.layout')

@section('title', 'Profil Desa')

@section('content')
<div class="container py-5">
    <!-- Header -->
    <div class="text-center mb-5">
        <h1 class="fw-bold">Profil Desa Cintalaksana</h1>
        <p class="text-muted">Informasi umum tentang sejarah, visi, misi, dan struktur organisasi Desa Cintalaksana</p>
    </div>

    <!-- Sejarah Desa -->
    <section class="mb-5">
        <h3>Sejarah Desa</h3>
        <p style="text-align: justify;">
            Desa Cintalaksana merupakan desa yang terletak di Kecamatan Tegalwaru, Kabupaten Karawang. 
            Dahulu desa ini dikenal sebagai wilayah agraris dengan mayoritas penduduknya bertani. Seiring waktu, 
            Cintalaksana berkembang menjadi desa yang tidak hanya mengandalkan sektor pertanian, tetapi juga mulai 
            mengembangkan sektor pariwisata dan UMKM.
        </p>
    </section>

    <!-- Visi dan Misi -->
    <section class="mb-5">
        <h3>Visi dan Misi</h3>
        <div class="row">
            <div class="col-md-6">
                <h5>Visi</h5>
                <p>"Mewujudkan Desa Cintalaksana yang Mandiri, Maju, dan Sejahtera Berbasis Potensi Lokal."</p>
            </div>
            <div class="col-md-6">
                <h5>Misi</h5>
                <ul>
                    <li>Meningkatkan pelayanan publik yang cepat dan transparan.</li>
                    <li>Mendorong pertumbuhan ekonomi desa melalui UMKM dan wisata.</li>
                    <li>Melestarikan budaya gotong royong dan nilai kearifan lokal.</li>
                    <li>Meningkatkan kualitas infrastruktur desa secara bertahap.</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Struktur Organisasi -->
    <section class="mb-5">
        <h3>Struktur Organisasi</h3>
        <img src="{{ asset('img/struktur-organisasi.png') }}" alt="Struktur Organisasi" class="img-fluid rounded shadow mt-3">
        <p class="text-muted mt-2">Struktur organisasi Pemerintah Desa Cintalaksana.</p>
    </section>

    <!-- Perangkat Desa (Opsional) -->
    {{-- <section class="mb-5">
        <h3>Perangkat Desa</h3>
        <div class="row g-4">
            <div class="col-md-4 text-center">
                <img src="{{ asset('img/kepala-desa.jpg') }}" class="rounded-circle" style="width: 150px; height: 150px; object-fit: cover;" alt="Kepala Desa">
                <h6 class="mt-2 mb-0">Bapak Agus Sulaiman</h6>
                <p class="text-muted">Kepala Desa</p>
            </div>
            <!-- Tambahkan perangkat lainnya jika ada -->
        </div>
    </section> --}}
</div>
@endsection