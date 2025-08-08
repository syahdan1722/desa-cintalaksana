@extends('layouts.app')

@section('content')
    <h1>Daftar Galeri</h1>

    <a href="{{ route('galeri.create') }}" class="btn btn-primary" style="margin-bottom: 20px;">Tambah Galeri</a>

    @foreach($galeris as $galeri)
        <div style="margin-bottom: 20px;">
            <h3>{{ $galeri->judul }}</h3>
            <p>{{ $galeri->deskripsi }}</p>
            <img src="{{ asset('storage/' . $galeri->gambar) }}" alt="{{ $galeri->judul }}" width="200">

            <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal</label>
            <input type="date" name="tanggal" class="form-control" required>
            </div>

            <div style="margin-top: 10px;">
                <a href="{{ route('galeri.edit', $galeri->id) }}" class="btn btn-warning">Edit</a>

                <form action="{{ route('galeri.destroy', $galeri->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Yakin ingin menghapus?')" class="btn btn-danger">Hapus</button>
                </form>
            </div>
        </div>
    @endforeach
@endsection
