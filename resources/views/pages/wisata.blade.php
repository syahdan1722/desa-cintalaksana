@extends('layouts.layout')

@section('title', 'Wisata')

@section('content')
<div class="container py-5">
    <h2 class="text-center mb-4">Wisata Desa Cintalaksana</h2>

    <!-- Form Search -->
    <div class="row justify-content-center mb-4">
        <div class="col-md-6">
            <input type="text" id="searchInput" class="form-control" placeholder="Cari wisata...">
        </div>
    </div>

    <!-- List Wisata -->
    <div class="row justify-content-center g-4" id="wisataList">
        <!-- Wisata 1 -->
        <div class="col-md-6 col-lg-4 wisata-item">
            <div class="card h-100 border-0 shadow-sm">
                <img src="/img/wisata.jpg" class="card-img-top" alt="Air Terjun Cibadak">
                <div class="card-body">
                    <h5 class="card-title">Air Terjun Cibadak</h5>
                    <p class="card-text">Nikmati keindahan alam dengan suasana sejuk dan asri.</p>
                    <a href="/wisata/air-terjun-cibadak" class="btn btn-sm btn-success">Lihat Detail</a>
                </div>
            </div>
        </div>

        <!-- Wisata 2 -->
        <div class="col-md-6 col-lg-4 wisata-item">
            <div class="card h-100 border-0 shadow-sm">
                <img src="/img/wisata2.jpg" class="card-img-top" alt="Kuliner Desa">
                <div class="card-body">
                    <h5 class="card-title">Kuliner Desa</h5>
                    <p class="card-text">Rasakan kenikmatan makanan khas dari Desa Cintalaksana.</p>
                    <a href="/wisata/kuliner-desa" class="btn btn-sm btn-success">Lihat Detail</a>
                </div>
            </div>
        </div>

        <!-- Wisata 3 -->
        <div class="col-md-6 col-lg-4 wisata-item">
            <div class="card h-100 border-0 shadow-sm">
                <img src="/img/wisata3.jpg" class="card-img-top" alt="Kegiatan Warga">
                <div class="card-body">
                    <h5 class="card-title">Kegiatan Warga</h5>
                    <p class="card-text">Berbagai kegiatan budaya dan sosial warga desa.</p>
                    <a href="/wisata/kegiatan-warga" class="btn btn-sm btn-success">Lihat Detail</a>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Script Search --}}
<script>
    document.getElementById("searchInput").addEventListener("keyup", function() {
        var keyword = this.value.toLowerCase();
        var items = document.querySelectorAll(".wisata-item");

        items.forEach(function(item) {
            var title = item.querySelector(".card-title").textContent.toLowerCase();
            if (title.includes(keyword)) {
                item.style.display = "block";
            } else {
                item.style.display = "none";
            }
        });
    });
</script>
@endsection