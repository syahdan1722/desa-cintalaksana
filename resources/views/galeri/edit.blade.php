@extends('layouts.app')

@section('content')
    <h1>Edit Galeri</h1>

    <form action="{{ route('galeri.update', $galeri->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div>
            <label>Judul</label><br>
            <input type="text" name="judul" value="{{ $galeri->judul }}" required>
        </div>

        <div>
            <label>Deskripsi</label><br>
            <textarea name="deskripsi">{{ $galeri->deskripsi }}</textarea>
        </div>

        <div>
            <label>Gambar Lama</label><br>
            <img src="{{ asset('storage/' . $galeri->gambar) }}" width="200"><br><br>

            <label>Ganti Gambar</label><br>
            <input type="file" name="gambar">
        </div>

        <button type="submit">Update</button>
    </form>
@endsection
