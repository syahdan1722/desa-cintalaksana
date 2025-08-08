@extends('layouts.admin')

@section('title', 'Edit Wisata')

@section('content')
<div class="card shadow-sm p-4 animated fadeIn">
    <h4 class="mb-3">Form Edit Wisata</h4>

    <form action="#" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nama" class="form-label">Nama Wisata</label>
            <input type="text" class="form-control" id="nama" name="nama" value="Curug Leuwi">
        </div>

        <div class="mb-3">
            <label for="lokasi" class="form-label">Lokasi</label>
            <input type="text" class="form-control" id="lokasi" name="lokasi" value="Kampung Sukarasa">
        </div>

        <div class="mb-3">
            <label for="gambar" class="form-label">Gambar Saat Ini</label><br>
            <img src="{{ asset('img/wisata1.jpg') }}" alt="Gambar Wisata" class="img-thumbnail mb-2" width="200">
            <input class="form-control" type="file" id="gambar" name="gambar">
        </div>

        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi Wisata</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="5">Deskripsi lama tentang tempat wisata...</textarea>
        </div>

        <div class="d-flex justify-content-between">
            <a href="/admin/wisata" class="btn btn-secondary"><i class="bi bi-arrow-left"></i> Kembali</a>
            <button type="submit" class="btn btn-success"><i class="bi bi-save"></i> Perbarui</button>
        </div>
    </form>
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