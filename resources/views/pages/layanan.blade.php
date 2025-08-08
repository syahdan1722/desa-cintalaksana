@extends('layouts.layout')

@section('title', 'Pengaduan Masyarakat')

@section('content')
<div class="container py-5">
    <h2 class="mb-4 text-center">Layanan Publik & Pengaduan Masyarakat</h2>
    <p class="text-center mb-5">Silakan sampaikan keluhan, saran, atau pengaduan Anda kepada pihak desa melalui formulir berikut.</p>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="p-4 shadow rounded bg-white">

                <!-- Alert Sukses -->
                <div class="alert alert-success d-none" id="alertSuccess">
                    Pengaduan Anda berhasil dikirim. Terima kasih atas partisipasi Anda!
                </div>

                <!-- Alert Error -->
                <div class="alert alert-danger d-none" id="alertError">
                    Mohon lengkapi semua data terlebih dahulu.
                </div>

                <form id="formPengaduan">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama" placeholder="Nama Anda">
                    </div>
                    <div class="mb-3">
                        <label for="telepon" class="form-label">No. Telepon / WhatsApp</label>
                        <input type="text" class="form-control" id="telepon" placeholder="08xxxxxxxxxx">
                    </div>
                    <div class="mb-3">
                        <label for="kategori" class="form-label">Kategori Pengaduan</label>
                        <select class="form-select" id="kategori">
                            <option value="">-- Pilih Kategori --</option>
                            <option value="Administrasi">Administrasi</option>
                            <option value="Fasilitas Umum">Fasilitas Umum</option>
                            <option value="Kesejahteraan Sosial">Kesejahteraan Sosial</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="pesan" class="form-label">Isi Pengaduan</label>
                        <textarea class="form-control" id="pesan" rows="4" placeholder="Tulis keluhan atau saran Anda di sini..."></textarea>
                    </div>
                    <button type="submit" class="btn btn-success w-100">Kirim Pengaduan</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById("formPengaduan").addEventListener("submit", function(e) {
        e.preventDefault();

        var nama = document.getElementById("nama").value.trim();
        var telepon = document.getElementById("telepon").value.trim();
        var kategori = document.getElementById("kategori").value.trim();
        var pesan = document.getElementById("pesan").value.trim();

        if (nama && telepon && kategori && pesan) {
            document.getElementById("alertSuccess").classList.remove("d-none");
            document.getElementById("alertError").classList.add("d-none");
            this.reset();
        } else {
            document.getElementById("alertError").classList.remove("d-none");
            document.getElementById("alertSuccess").classList.add("d-none");
        }
    });
</script>
@endsection