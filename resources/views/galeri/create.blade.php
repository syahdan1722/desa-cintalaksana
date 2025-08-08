@extends('layouts.app')

@section('content')
    <h1>Tambah Galeri</h1>

    <form action="{{ route('galeri.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div>
            <label>Judul</label><br>
            <input type="text" name="judul" required>
        </div>

        <div>
            <label>Deskripsi</label><br>
            <textarea name="deskripsi"></textarea>
        </div>

        <div>
            <label>Gambar</label><br>
            <input type="file" name="gambar" required>
        </div>

        <button type="submit">Simpan</button>
    </form>
@endsection
