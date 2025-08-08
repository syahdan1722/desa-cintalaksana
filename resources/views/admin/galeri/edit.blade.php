@extends('layouts.admin')

@section('title', 'Edit Foto Galeri')

@section('content')
<div class="card shadow-sm p-4 animated fadeIn">
    <h4 class="mb-3">Form Edit Foto Galeri</h4>

    <form action="#" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="judul" class="form-label">Judul Foto</label>
            <input type="text" class="form-control" id="judul" name="judul" value="Judul Lama Foto">
        </div>

        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi Foto</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3">Deskripsi lama foto galeri...</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Foto Saat Ini</label><br>
            <img src="{{ asset('img/galeri1.jpg') }}" alt="Foto Galeri" class="img-thumbnail mb-2" width="200">
            <input type="file" class="form-control" id="gambar" name="gambar">
        </div>

        <div class="d-flex justify-content-between">
            <a href="/admin/galeri" class="btn btn-secondary"><i class="bi bi-arrow-left"></i> Kembali</a>
            <button type="submit" class="btn btn-success"><i class="bi bi-save2"></i> Perbarui</button>
        </div>
    </form>
</div>
@endsection