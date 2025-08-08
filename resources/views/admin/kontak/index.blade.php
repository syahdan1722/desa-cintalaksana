@extends('layouts.admin')

@section('title', 'Kotak Pesan Masuk')

@section('content')
<div class="card shadow-sm p-4 animated fadeIn">
    <h4 class="mb-4"><i class="bi bi-envelope-paper"></i> Pesan Masuk dari Pengunjung</h4>

    <div class="table-responsive">
        <table class="table table-bordered table-hover align-middle">
            <thead class="table-primary text-center">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Subjek</th>
                    <th>Pesan</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                {{-- Dummy Data --}}
                <tr>
                    <td class="text-center">1</td>
                    <td>Siti Nurhaliza</td>
                    <td>siti@mail.com</td>
                    <td>Saran Website</td>
                    <td class="text-truncate" style="max-width: 250px;">Tampilan website sangat bagus, tapi mungkin bisa ditambah informasi jadwal kegiatan rutin...</td>
                    <td class="text-center">29 Juli 2025</td>
                    <td class="text-center">
                        <button class="btn btn-sm btn-info"><i class="bi bi-eye"></i> Lihat</button>
                        <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i> Hapus</button>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">2</td>
                    <td>Rudi Haryanto</td>
                    <td>rudi@mail.com</td>
                    <td>Permintaan Data</td>
                    <td class="text-truncate" style="max-width: 250px;">Saya butuh informasi mengenai data UMKM di Desa Cintalaksana untuk penelitian.</td>
                    <td class="text-center">28 Juli 2025</td>
                    <td class="text-center">
                        <button class="btn btn-sm btn-info"><i class="bi bi-eye"></i> Lihat</button>
                        <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i> Hapus</button>
                    </td>
                </tr>
                {{-- End Dummy --}}
            </tbody>
        </table>
    </div>
</div>
@endsection

@push('styles')
<style>
    .animated {
        animation: fadeIn 0.5s ease-in-out;
    }

    @keyframes fadeIn {
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