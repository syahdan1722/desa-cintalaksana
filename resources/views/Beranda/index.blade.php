@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h1 class="text-2xl font-bold mb-4 text-center">Selamat Datang di {{ $profil->nama_desa }}</h1>
    <p class="text-center mb-8">{{ $profil->beranda }}</p>

    {{-- Berita --}}
    <section class="mb-10">
        <h2 class="text-xl font-semibold mb-4 border-b pb-2">Berita Terbaru</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($beritas as $item)
                <div class="bg-white rounded shadow p-4">
                    <h3 class="font-bold text-lg mb-2">{{ $item->judul }}</h3>
                    <p class="text-sm text-gray-700">{{ Str::limit($item->isi, 120) }}</p>
                </div>
            @endforeach
        </div>
    </section>

    {{-- Wisata --}}
    <section class="mb-10">
        <h2 class="text-xl font-semibold mb-4 border-b pb-2">Destinasi Wisata</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach($wisatas as $item)
                <div class="bg-white rounded shadow p-4">
                    <h3 class="font-bold text-lg mb-2">{{ $item->nama }}</h3>
                    <p class="text-sm text-gray-700">{{ Str::limit($item->deskripsi, 100) }}</p>
                </div>
            @endforeach
        </div>
    </section>

    {{-- Galeri --}}
    <section class="mb-10">
        <h2 class="text-xl font-semibold mb-4 border-b pb-2">Galeri Foto</h2>
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4">
            @foreach($galeris as $item)
                <img src="{{ asset('storage/galeri/' . $item->gambar) }}" alt="Foto Galeri" class="rounded-lg shadow">
            @endforeach
        </div>
    </section>

    {{-- Layanan --}}
    <section class="mb-10">
        <h2 class="text-xl font-semibold mb-4 border-b pb-2">Layanan Desa</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach($layanans as $item)
                <div class="bg-blue-100 text-blue-800 rounded p-4 shadow">
                    <h4 class="font-semibold">{{ $item->nama }}</h4>
                    <p class="text-sm">{{ $item->deskripsi }}</p>
                </div>
            @endforeach
        </div>
    </section>
</div>
@endsection
