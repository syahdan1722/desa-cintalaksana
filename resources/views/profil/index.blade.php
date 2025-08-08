@extends('layouts.app')

@section('content')
    <h1>Profil Desa {{ $profil->nama_desa }}</h1>

    <h3>Beranda</h3>
    <p>{{ $profil->beranda }}</p>

    <h3>Visi</h3>
    <p>{{ $profil->visi }}</p>

    <h3>Misi</h3>
    <p>{{ $profil->misi }}</p>

    <h3>Struktur Desa</h3>
    @if($profil->struktur_desa)
        <img src="{{ asset('storage/' . $profil->struktur_desa) }}" alt="Struktur Desa" width="400">
    @else
        <p>Belum ada gambar struktur desa.</p>
    @endif
@endsection
