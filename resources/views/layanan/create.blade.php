@extends('layouts.app') {{-- Atau sesuaikan dengan layout kamu --}}

@section('content')
    <div class="container">
        <h1>Tambah Layanan</h1>

        <form action="{{ route('layanan.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" name="judul" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea name="deskripsi" class="form-control" rows="4" required></textarea>
            </div>

            <div class="form-group">
                <label for="kontak">kontak</label>
                <input type="text" name="kontak" class="form-control" placeholder="Masukkan Nomor/wa/email">
            </div>

            <button type="submit" class="btn btn-success mt-3">Simpan</button>
            <a href="{{ route('layanan.index') }}" class="btn btn-secondary mt-3">Kembali</a>
        </form>
    </div>
@endsection
