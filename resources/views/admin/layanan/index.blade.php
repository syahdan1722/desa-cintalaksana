@extends('layouts.admin')

@section('title', 'Layanan / Pengaduan Masyarakat')

@section('content')
<div class="card shadow-sm p-4 animated fadeIn">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="mb-0"><i class="bi bi-chat-left-dots"></i> Layanan / Pengaduan Masyarakat</h4>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered table-hover align-middle text-center">
            <thead class="table-primary">
                <tr>
                    <th>No</th>
                    <th>Nama Pengirim</th>
                    <th>Email</th>
                    <th>Isi Pengaduan</th>
                    <th>Status</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <tr>
                    <td>1</td>
                    <td>Ani Rahmawati</td>
                    <td>ani@gmail.com</td>
                    <td>Ada jalan rusak di RT 04 RW 02</td>
                    <td><span class="badge bg-warning text-dark">Belum diproses</span></td>
                    <td>18 Juli 2025</td>
                    <td>
                        <div class="d-flex justify-content-center gap-2">
                            <button class="btn btn-sm btn-success"><i class="bi bi-check-circle"></i> Selesai</button>
                            <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i> Hapus</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Budi Santoso</td>
                    <td>budi@mail.com</td>
                    <td>Sampah menumpuk di dekat balai desa</td>
                    <td><span class="badge bg-success">Selesai</span></td>
                    <td>15 Juli 2025</td>
                    <td>
                        <div class="d-flex justify-content-center gap-2">
                            <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i> Hapus</button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
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