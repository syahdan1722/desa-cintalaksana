@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Profil Desa</h1>

    <form action="{{ route('profil.update') }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="struktur">Foto Struktur Desa</label>
            <input type="file" name="struktur" class="form-control">
            </div>

        <button type="submit" class="btn btn-primary mt-3">Simpan</button>
    </form>

        <div class="form-group mt-3">
            <label for="beranda">Beranda</label>
            <textarea name="beranda" class="form-control" rows="4">{{ old('beranda', $profil->beranda) }}</textarea>
        </div>

        <div class="form-group mt-3">
            <label for="visi">Visi</label>
            <textarea name="visi" class="form-control" rows="3">{{ old('visi', $profil->visi) }}</textarea>
        </div>

        <div class="form-group mt-3">
            <label for="misi">Misi</label>
            <textarea name="misi" class="form-control" rows="4">{{ old('misi', $profil->misi) }}</textarea>
        </div>

        <button type="submit" class="btn btn-success mt-4">Simpan</button>
        <a href="{{ route('profil.edit', $profil->id) }}" class="btn btn-primary">Edit Profil</a>
    </form>
</div>
@endsection
