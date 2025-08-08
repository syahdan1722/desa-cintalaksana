@extends('layouts.layout')

@section('title', 'Air Terjun Cibadak')

@section('content')
<div class="container py-5">
    <h2 class="mb-3">Air Terjun Cibadak</h2>
    <img src="{{ asset('img/wisata.jpg') }}" class="img-fluid rounded mb-4 shadow" alt="Air Terjun Cibadak">
    <p class="text-muted">Dipublikasikan oleh Admin - 30 Juli 2025</p>
    <p style="text-align: justify;">
        Air Terjun Cibadak merupakan destinasi wisata alam unggulan di Desa Cintalaksana, Kecamatan Tegalwaru. Dikelilingi oleh hutan yang asri dan udara yang sejuk, wisata ini menjadi pilihan ideal untuk bersantai dan menikmati alam.
        <br><br>
        Lokasinya mudah diakses dengan kendaraan roda dua maupun empat, serta dilengkapi fasilitas seperti area parkir, warung makanan, dan tempat istirahat. Pengunjung dapat menikmati pemandangan air terjun setinggi ±15 meter serta suara gemericik air yang menenangkan.
    </p>

    <!-- Google Maps Embed -->
    <div class="mt-5">
        <h4>Lokasi di Peta</h4>
        <div class="ratio ratio-16x9">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15813.150780432462!2d107.2833301!3d-6.5701735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e690ebf4a3f11af%3A0xd6c930a51fa2f0cf!2sCurug%20Cibadak!5e0!3m2!1sid!2sid!4v1721900000000!5m2!1sid!2sid" 
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>

    <!-- Tombol Kembali -->
    <div class="mt-4">
        <a href="/wisata" class="btn btn-outline-success">← Kembali ke Daftar Wisata</a>
    </div>
</div>
@endsection