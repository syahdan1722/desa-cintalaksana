@extends('layouts.app')

@section('content')
    <h1>Daftar Layanan</h1>
    <a href="{{ route('layanan.create') }}">Tambah Layanan</a>

    <ul>
        @foreach($layanans as $layanan)
            <li>
                <h3>{{ $layanan->judul }}</h3>
                <p>{{ $layanan->deskripsi }}</p>
                <p>Kontak: {{ $layanan->kontak }}</p>
                <th>Kontak</th>
                <td>{{ $layanan->kontak }}</td>
                <a href="{{ route('layanan.edit', $layanan) }}">Edit</a>
                <form action="{{ route('layanan.destroy', $layanan) }}" method="POST">
                    @csrf @method('DELETE')
                    <button type="submit">Hapus</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
