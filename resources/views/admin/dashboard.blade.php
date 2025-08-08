@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
<style>
    .card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    }

    .btn {
        transition: all 0.3s ease;
    }

    .btn:hover {
        transform: translateY(-2px);
        opacity: 0.9;
    }

    .list-unstyled li {
        margin-bottom: 10px;
        opacity: 0;
        animation: fadeInUp 0.6s ease forwards;
    }

    .list-unstyled li:nth-child(1) { animation-delay: 0.1s; }
    .list-unstyled li:nth-child(2) { animation-delay: 0.2s; }
    .list-unstyled li:nth-child(3) { animation-delay: 0.3s; }

    @keyframes fadeInUp {
        from {
            transform: translateY(10px);
            opacity: 0;
        }
        to {
            transform: translateY(0);
            opacity: 1;
        }
    }
</style>

<div class="container-fluid">
    <div class="row g-4 mb-4">
        <div class="col-md-3">
            <div class="card shadow-sm border-0 text-white" style="background: linear-gradient(135deg, #4e54c8, #8f94fb);">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="mb-1">Total Berita</h6>
                            <h3 class="fw-bold">12</h3>
                        </div>
                        <i class="bi bi-newspaper fs-2"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card shadow-sm border-0 text-white" style="background: linear-gradient(135deg, #11998e, #38ef7d);">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="mb-1">Total Wisata</h6>
                            <h3 class="fw-bold">8</h3>
                        </div>
                        <i class="bi bi-geo-alt fs-2"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card shadow-sm border-0 text-white" style="background: linear-gradient(135deg, #f7971e, #ffd200);">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="mb-1">Total Galeri</h6>
                            <h3 class="fw-bold">15</h3>
                        </div>
                        <i class="bi bi-images fs-2"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card shadow-sm border-0 text-white" style="background: linear-gradient(135deg, #cb2d3e, #ef473a);">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="mb-1">Total Layanan</h6>
                            <h3 class="fw-bold">5</h3>
                        </div>
                        <i class="bi bi-people fs-2"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-4">
        <div class="col-md-6">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h5 class="card-title fw-semibold">Grafik Data (Dummy)</h5>
                    <img src="{{ asset('img/chart_dummy.png') }}" alt="Grafik Dummy" class="img-fluid">
                    <p class="text-muted mt-2">Statistik kunjungan atau jumlah berita per bulan.</p>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h5 class="card-title fw-semibold">Aktivitas Terakhir</h5>
                    <ul class="list-unstyled">
                        <li><i class="bi bi-plus-circle text-success me-2"></i> Menambahkan berita baru: <strong>Pelatihan UMKM</strong></li>
                        <li><i class="bi bi-pencil-square text-primary me-2"></i> Mengedit wisata: <strong>Curug Cibadak</strong></li>
                        <li><i class="bi bi-image text-warning me-2"></i> Menambah galeri <strong>gotong royong</strong></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center mt-4">
        <a href="/admin/berita/create" class="btn btn-primary me-2"><i class="bi bi-plus-circle me-1"></i> Berita Baru</a>
        <a href="/admin/wisata/create" class="btn btn-success me-2"><i class="bi bi-plus-circle me-1"></i> Wisata Baru</a>
        <a href="/admin/galeri/create" class="btn btn-warning text-white"><i class="bi bi-plus-circle me-1"></i> Galeri Baru</a>
    </div>
</div>
@endsection