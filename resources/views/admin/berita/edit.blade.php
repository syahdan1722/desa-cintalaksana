@extends('layouts.admin')

@section('title', 'Edit Berita')

@section('content')
<div class="card shadow-sm p-4 animated fadeIn">
    <h4 class="mb-3">Form Edit Berita</h4>

    <form action="#" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="judul" class="form-label">Judul Berita</label>
            <input type="text" class="form-control" id="judul" name="judul" value="Contoh Judul Berita">
        </div>

        <div class="mb-3">
            <label for="kategori" class="form-label">Kategori</label>
            <select class="form-select" id="kategori" name="kategori">
                <option value="Umum" selected>Umum</option>
                <option value="Pemerintahan">Pemerintahan</option>
                <option value="Kegiatan">Kegiatan</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="gambar" class="form-label">Gambar Saat Ini</label><br>
            <img src="{{ asset('img/contoh.jpg') }}" alt="Gambar Berita" class="img-thumbnail mb-2" width="200">
            <input class="form-control" type="file" id="gambar" name="gambar">
        </div>

        <div class="mb-3">
            <label for="isi" class="form-label">Isi Berita</label>
            <textarea class="form-control" id="isi" name="isi" rows="5">Contoh isi berita lama...</textarea>
        </div>

        <div class="d-flex justify-content-between">
            <a href="/admin/berita" class="btn btn-secondary"><i class="bi bi-arrow-left"></i> Kembali</a>
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