@extends('layouts.admin')

@section('title', 'Daftar Wisata')

@section('content')
<div class="card shadow-sm p-4 animated fadeIn">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="mb-0">Data Wisata</h4>
        <a href="/admin/wisata/create" class="btn btn-primary"><i class="bi bi-plus-circle"></i> Tambah Wisata</a>
    </div>

    <table class="table table-bordered table-hover table-striped">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Nama Wisata</th>
                <th>Gambar</th>
                <th>Lokasi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Curug Leuwi</td>
                <td><img src="{{ asset('img/wisata1.jpg') }}" width="100" class="img-thumbnail"></td>
                <td>Kampung Sukarasa</td>
                <td>
                    <a href="/admin/wisata/edit" class="btn btn-sm btn-warning"><i class="bi bi-pencil-square"></i></a>
                    <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>
                </td>
            </tr>
            <!-- Tambahkan baris data lainnya di sini -->
        </tbody>
    </table>
</div>
@endsection

@push('styles')
<style>
    .animated {
        animation: fadeInUp 0.5s ease-in-out;
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(10px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>
@endpush