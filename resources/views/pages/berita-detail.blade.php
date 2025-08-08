@extends('layouts.layout')

@section('title', 'Gotong Royong Warga')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-9">
            <h1 class="mb-3">Gotong Royong Warga</h1>
            <p class="text-muted">18 Juli 2025</p>
            <img src="/img/slider2-desa.jpg" class="img-fluid rounded mb-4" alt="Gotong Royong">
            <div style="text-align: justify;">
                <p>
                    Warga Desa Cintalaksana melaksanakan kegiatan gotong royong membersihkan jalan dan lingkungan sekitar desa. Kegiatan ini bertujuan untuk menjaga kebersihan desa dan mempererat kebersamaan antar warga.
                </p>
                <p>
                    Kegiatan ini merupakan bagian dari persiapan menyambut Hari Kemerdekaan Republik Indonesia yang ke-80 tahun. Warga sangat antusias dan berharap kegiatan seperti ini bisa terus dilakukan secara rutin.
                </p>
            </div>
            <a href="/berita" class="btn btn-outline-success mt-4">← Kembali ke Berita</a>
        </div>
    </div>
</div>
@endsection