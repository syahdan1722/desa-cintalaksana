@extends('layouts.admin')

@section('title', 'Galeri Kegiatan')

@section('content')
<div class="card shadow-sm p-4 animated fadeIn">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="mb-0">Galeri Foto</h4>
        <a href="/admin/galeri/create" class="btn btn-primary"><i class="bi bi-plus-circle"></i> Tambah Foto</a>
    </div>

    <div class="row">
        @for($i = 1; $i <= 6; $i++)
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm h-100">
                <img src="{{ asset('img/galeri'.$i.'.jpg') }}" class="card-img-top" alt="Foto Galeri">
                <div class="card-body">
                    <h5 class="card-title">Judul Foto {{ $i }}</h5>
                    <p class="card-text text-muted small">Tanggal Upload: 2025-07-{{ str_pad($i, 2, '0', STR_PAD_LEFT) }}</p>
                    <p class="card-text">Ini adalah deskripsi singkat dari foto galeri ke-{{ $i }} untuk memperjelas isi foto.</p>
                    <div class="d-flex justify-content-end gap-2">
                        <a href="/admin/galeri/edit" class="btn btn-sm btn-warning"><i class="bi bi-pencil-square"></i></a>
                        <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>
                    </div>
                </div>
            </div>
        </div>
        @endfor
    </div>
</div>
@endsection

@push('styles')
<style>
    .animated {
        animation: fadeInUp 0.5s ease-in-out;
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(10px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>
@endpush