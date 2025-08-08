@extends('layouts.layout')

@section('title', 'Kontak')

@section('content')
<div class="container py-5">
    <h2 class="mb-4 text-center">Kontak Desa Cintalaksana</h2>
    <p class="text-center mb-5">Silakan hubungi kami untuk pertanyaan, saran, atau informasi lebih lanjut.</p>

    <div class="row g-4">
        <!-- Formulir Kontak -->
        <div class="col-md-6">
            <div class="p-4 shadow rounded bg-white">
                <h5 class="mb-3">Formulir Kontak</h5>

                <!-- Alert Sukses -->
                <div class="alert alert-success d-none" id="alertSuccess">
                    Pesan Anda berhasil dikirim!
                </div>

                <!-- Alert Error -->
                <div class="alert alert-danger d-none" id="alertError">
                    Mohon lengkapi semua data terlebih dahulu.
                </div>

                <form id="formKontak">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" placeholder="Nama Anda">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="email@example.com">
                    </div>
                    <div class="mb-3">
                        <label for="pesan" class="form-label">Pesan</label>
                        <textarea class="form-control" id="pesan" rows="4" placeholder="Tulis pesan Anda di sini..."></textarea>
                    </div>
                    <button type="submit" class="btn btn-success">Kirim Pesan</button>
                </form>
            </div>
        </div>

        <!-- Info Kontak & Peta -->
        <div class="col-md-6">
            <div class="p-4 shadow rounded bg-white h-100">
                <h5 class="mb-3">Informasi Kontak</h5>
                <p><strong>Alamat:</strong> Desa Cintalaksana, Kecamatan Tegalwaru, Kabupaten Karawang, Jawa Barat</p>
                <p><strong>Email:</strong> cintalaksana@karawangkab.go.id</p>
                <p><strong>Telepon:</strong> (0267) 123456</p>

                <div class="mt-4">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.905349951893!2d107.394000!3d-6.142000!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6977f9a690b38b%3A0x5b0ad28e4728728e!2sTegalwaru%2C%20Karawang%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1688438529193"
                        width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Script Notifikasi --}}
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const form = document.getElementById('formKontak');
        const alertSuccess = document.getElementById('alertSuccess');
        const alertError = document.getElementById('alertError');

        form.addEventListener('submit', function (e) {
            e.preventDefault();

            const nama = document.getElementById('nama').value.trim();
            const email = document.getElementById('email').value.trim();
            const pesan = document.getElementById('pesan').value.trim();

            if (nama && email && pesan) {
                alertSuccess.classList.remove('d-none');
                alertError.classList.add('d-none');
                form.reset();

                setTimeout(() => {
                    alertSuccess.classList.add('d-none');
                }, 5000);
            } else {
                alertSuccess.classList.add('d-none');
                alertError.classList.remove('d-none');

                setTimeout(() => {
                    alertError.classList.add('d-none');
                }, 5000);
            }
        });
    });
</script>
@endsection