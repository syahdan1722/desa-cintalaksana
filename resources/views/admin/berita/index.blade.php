<!-- resources/views/admin/berita/index.blade.php -->
@extends('layouts.admin')

@section('title', 'Kelola Berita')

@section('content')
<div class="container">
    <div class="bg-white shadow rounded p-4 animate__animated animate__fadeIn">
        <h2 class="fw-semibold">Daftar Berita</h2>
        <a href="/admin/berita/create" class="btn btn-primary">
            <i class="bi bi-plus-circle me-1"></i> Tambah Berita
        </a>
    </div>

    <div class="bg-white shadow rounded p-4 animate__animated animate__fadeIn">
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <!-- Contoh data statis -->
                <tr>
                    <td>1</td>
                    <td>Peresmian Jalan Baru</td>
                    <td>2025-07-29</td>
                    <td>
                        <a href="/admin/berita/edit" class="btn btn-sm btn-warning me-1">
                            <i class="bi bi-pencil"></i>
                        </a>
                        <button class="btn btn-sm btn-danger">
                            <i class="bi bi-trash"></i>
                        </button>
                    </td>
                </tr>
                <!-- Tambahkan data berita dinamis di sini -->
            </tbody>
        </table>
    </div>
</div>
@endsection