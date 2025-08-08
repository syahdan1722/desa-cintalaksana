@extends('layouts.app') {{-- Ganti dengan layout kamu jika berbeda --}}

@section('content')
<div class="container">
    <h1>Edit Layanan</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Periksa kembali:</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('layanan.update', $layanan->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="judul">Judul Layanan</label>
            <input type="text" name="judul" class="form-control" value="{{ old('judul', $layanan->judul) }}" required>
        </div>

        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea name="deskripsi" class="form-control" rows="4" required>{{ old('deskripsi', $layanan->deskripsi) }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Update</button>
        <a href="{{ route('layanan.index') }}" class="btn btn-secondary mt-3">Kembali</a>
    </form>
</div>
@endsection
