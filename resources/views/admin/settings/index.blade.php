@extends('layouts.admin')

@section('title', 'Pengaturan Akun')

@section('content')
<div class="row g-4 animated fadeIn">
    {{-- Ubah Profil --}}
    <div class="col-md-6">
        <div class="card shadow-sm border-0">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0"><i class="bi bi-person-circle me-2"></i>Ubah Informasi Akun</h5>
            </div>
            <div class="card-body">
                <form action="#" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="username" class="form-label">Nama Pengguna</label>
                        <input type="text" id="username" name="username" class="form-control" placeholder="Masukkan nama pengguna">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Alamat Email</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Masukkan email aktif">
                    </div>
                    <button type="submit" class="btn btn-primary w-100"><i class="bi bi-save"></i> Simpan Perubahan</button>
                </form>
            </div>
        </div>
    </div>

    {{-- Ubah Password --}}
    <div class="col-md-6">
        <div class="card shadow-sm border-0">
            <div class="card-header bg-secondary text-white">
                <h5 class="mb-0"><i class="bi bi-shield-lock me-2"></i>Ubah Kata Sandi</h5>
            </div>
            <div class="card-body">
                <form action="#" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="current_password" class="form-label">Kata Sandi Lama</label>
                        <input type="password" id="current_password" name="current_password" class="form-control" placeholder="Masukkan sandi lama">
                    </div>
                    <div class="mb-3">
                        <label for="new_password" class="form-label">Kata Sandi Baru</label>
                        <input type="password" id="new_password" name="new_password" class="form-control" placeholder="Masukkan sandi baru">
                    </div>
                    <div class="mb-3">
                        <label for="confirm_password" class="form-label">Konfirmasi Sandi Baru</label>
                        <input type="password" id="confirm_password" name="confirm_password" class="form-control" placeholder="Konfirmasi sandi baru">
                    </div>
                    <button type="submit" class="btn btn-secondary w-100"><i class="bi bi-key-fill"></i> Ubah Kata Sandi</button>
                </form>
            </div>
        </div>
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