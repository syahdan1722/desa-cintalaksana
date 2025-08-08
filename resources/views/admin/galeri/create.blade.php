@extends('layouts.admin')

@section('title', 'Tambah Foto Galeri')

@section('content')
<div class="card shadow-sm p-4 animated fadeIn">
    <h4 class="mb-3">Form Tambah Foto Galeri</h4>

    <form action="#" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="judul" class="form-label">Judul Foto</label>
            <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukkan judul foto">
        </div>

        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi Foto</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" placeholder="Tuliskan deskripsi foto..."></textarea>
        </div>

        <div class="mb-3">
            <label for="gambar" class="form-label">Unggah Foto</label>
            <input type="file" class="form-control" id="gambar" name="gambar">
        </div>

        <div class="d-flex justify-content-between">
            <a href="/admin/galeri" class="btn btn-secondary"><i class="bi bi-arrow-left"></i> Kembali</a>
            <button type="submit" class="btn btn-success"><i class="bi bi-cloud-upload"></i> Simpan</button>
        </div>
    </form>
</div>
@endsection