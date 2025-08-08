@extends('layouts.app')

@section('content')
    <h2>Daftar Berita</h2>

    <a href="{{ route('berita.create') }}" class="btn btn-primary mb-3">Tambah Berita</a>

    @foreach ($beritas as $berita)
        <div class="card mb-3">
            <div class="card-body">
                <h4>{{ $berita->judul }}</h4>
                <p><strong>Tanggal:</strong> {{ $berita->tanggal }}</p>
                <p>{{ $berita->isi }}</p>
                @if ($berita->gambar)
                    <img src="{{ asset('storage/berita/' . $berita->gambar) }}" width="200" class="mt-2">
                @endif
            </div>
        </div>
    @endforeach
@endsection
