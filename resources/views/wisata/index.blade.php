@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Daftar Wisata</h1>

    <a href="{{ route('wisata.create') }}" class="btn btn-primary mb-4">Tambah Wisata</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @forelse($wisatas as $wisata)
        <div class="card mb-4">
            <div class="card-body">
                <h3>{{ $wisata->judul }}</h3>
                <p>{{ $wisata->deskripsi }}</p>
                @if($wisata->gambar)
                    <img src="{{ asset('storage/wisata/' . $wisata->gambar) }}" alt="{{ $wisata->judul }}" class="img-fluid mb-3" style="max-width: 300px;">
                @endif
                <div>
                    <a href="{{ route('wisata.edit', $wisata->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('wisata.destroy', $wisata->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                    </form>
                </div>
            </div>
        </div>
    @empty
        <p>Tidak ada data wisata.</p>
    @endforelse
</div>
@endsection
