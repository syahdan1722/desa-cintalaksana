@extends('layouts.layout')

@section('title', 'Beranda')

@section('content')
    <!-- Hero Section (Carousel Slider) -->
    <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/img/banner-desa.jpg" class="d-block w-100" alt="Slide 1" style="height: 500px; object-fit: cover;">
                <div class="carousel-caption d-none d-md-block">
                    <h1>Potensi Wisata Alami</h1>
                    <p>Temukan pesona Air Terjun Cibadak dan lainnya</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/img/slider2-desa.jpg" class="d-block w-100" alt="Slide 2" style="height: 500px; object-fit: cover;">
                <div class="carousel-caption d-none d-md-block">
                    <h1>Gotong Royong Warga</h1>
                    <p>Kebersamaan dalam pembangunan desa</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/img/slider3-desa.jpg" class="d-block w-100" alt="Slide 3" style="height: 500px; object-fit: cover;">
                <div class="carousel-caption d-none d-md-block">
                    <h1>Digitalisasi UMKM</h1>
                    <p>Dukungan teknologi untuk pelaku usaha desa</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true" style="filter: invert(1);"></span>
            <span class="visually-hidden">Sebelumnya</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true" style="filter: invert(1);"></span>
            <span class="visually-hidden">Berikutnya</span>
        </button>
    </div>

    <!-- Sambutan Kepala Desa -->
    <div style="background-color: #f8f8f8; padding: 50px 20px;">
        <div class="container d-flex flex-column flex-md-row align-items-center gap-4">
            <div class="flex-shrink-0 text-center">
                <img src="{{ asset('img/kepala-desa.jpg') }}" alt="Kepala Desa" style="width: 200px; height: 200px; object-fit: cover; border-radius: 100px; border: 4px solid #32CD32;">
                <p class="mt-2 fw-bold">Bapak Agus Sulaiman<br><small style="font-weight: normal;">Kepala Desa Cintalaksana</small></p>
            </div>
            <div class="flex-grow-1">
                <h2 class="mb-3">Sambutan Kepala Desa</h2>
                <p style="text-align: justify;">
                    Assalamu’alaikum Warahmatullahi Wabarakatuh.<br>
                    Dengan rasa syukur, kami menyambut Anda di website resmi Desa Cintalaksana. Melalui media ini kami ingin menyajikan informasi yang transparan, aktual, dan bermanfaat untuk masyarakat. Semoga website ini menjadi jembatan komunikasi yang baik antara pemerintah desa dan warga.
                </p>
                <a href="/profil" class="btn btn-success mt-3">Lihat Profil Lengkap</a>
            </div>
        </div>
    </div>

    <!-- Tentang Desa -->
    <section style="padding: 60px 0; background-color: #f8f8f8;">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-md-6">
                    <img src="{{ asset('img/banner2-desa.jpg') }}" alt="Tentang Desa" class="img-fluid rounded shadow">
                </div>
                <div class="col-md-6">
                    <h2 class="mb-4">Tentang Desa Cintalaksana</h2>
                    <p style="text-align: justify;">
                        Desa Cintalaksana merupakan salah satu desa di Kecamatan Tegalwaru, Kabupaten Karawang yang dikenal dengan keindahan alamnya, budaya gotong royong yang kuat, serta masyarakat yang ramah dan produktif.
                        <br><br>
                        Selain sektor pertanian dan perkebunan, desa ini juga mulai mengembangkan potensi wisata alam dan UMKM lokal yang menjanjikan.
                    </p>
                    <a href="/profil" class="btn btn-sm btn-success">Selengkapnya</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Galeri Singkat -->
    <div style="padding: 50px 20px; background-color: #f8f8f8; text-align: center;">
        <h2>Galeri Kegiatan Desa</h2>
        <div style="display: flex; justify-content: center; flex-wrap: wrap; gap: 20px; margin-top: 30px;">
            <!-- Gambar 1 -->
            <div style="width: 300px; border-radius: 8px; overflow: hidden; background-color: white; box-shadow: 0 2px 6px rgba(0,0,0,0.1);">
                <img src="/img/galeri-desa.jpg" alt="Hajat Bumi" style="width: 100%; height: 200px; object-fit: cover;">
                <div style="padding: 10px;">
                    <h5 style="margin-bottom: 5px;">Hajat Bumi</h5>
                    <a href="/galeri" class="btn btn-sm btn-success">Lihat Selengkapnya</a>
                </div>
            </div>

            <!-- Gambar 2 -->
            <div style="width: 300px; border-radius: 8px; overflow: hidden; background-color: white; box-shadow: 0 2px 6px rgba(0,0,0,0.1);">
                <img src="/img/umkm.jpg" alt="Pelatihan UMKM" style="width: 100%; height: 200px; object-fit: cover;">
                <div style="padding: 10px;">
                    <h5 style="margin-bottom: 5px;">Pelatihan UMKM</h5>
                    <a href="/galeri" class="btn btn-sm btn-success">Lihat Selengkapnya</a>
                </div>
            </div>

            <!-- Gambar 3 -->
            <div style="width: 300px; border-radius: 8px; overflow: hidden; background-color: white; box-shadow: 0 2px 6px rgba(0,0,0,0.1);">
                <img src="/img/airterjun.jpg" alt="Air Terjun Cibadak" style="width: 100%; height: 200px; object-fit: cover;">
                <div style="padding: 10px;">
                    <h5 style="margin-bottom: 5px;">Air Terjun Cibadak</h5>
                    <a href="/galeri" class="btn btn-sm btn-success">Lihat Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Berita Terbaru -->
    <div style="padding: 60px 20px; background-color: #fff;">
        <div class="container text-center">
            <h2 class="mb-4">Berita Terbaru</h2>
            <div class="row justify-content-center g-4">
                <!-- Berita 1 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <img src="/img/slider2-desa.jpg" class="card-img-top" alt="Gotong Royong">
                        <div class="card-body">
                            <h5 class="card-title">Gotong Royong Warga</h5>
                            <p class="card-text">Warga membersihkan jalan bersama untuk persiapan HUT RI.</p>
                            <a href="/berita/gotong-royong" class="btn btn-sm btn-success">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>

                <!-- Berita 2 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <img src="/img/berita2.jpg" class="card-img-top" alt="Pelatihan UMKM">
                        <div class="card-body">
                            <h5 class="card-title">Pelatihan UMKM</h5>
                            <p class="card-text">Digitalisasi UMKM oleh pemerintah desa & mahasiswa KKN.</p>
                            <a href="/berita/pelatihan-umkm" class="btn btn-sm btn-success">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Wisata -->
    <div style="padding: 60px 20px; background-color: #f8f8f8;">
        <div class="container text-center">
            <h2 class="mb-4">Wisata Unggulan</h2>
            <div class="row justify-content-center g-4">
                <!-- Wisata 1 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <img src="/img/wisata.jpg" class="card-img-top" alt="Air Terjun Cibadak">
                        <div class="card-body">
                            <h5 class="card-title">Air Terjun Cibadak</h5>
                            <p class="card-text">Wisata alam favorit keluarga di Desa Cintalaksana.</p>
                            <a href="/wisata/air-terjun-cibadak" class="btn btn-sm btn-success">Lihat Detail</a>
                        </div>
                    </div>
                </div>

                <!-- Wisata 2 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <img src="/img/wisata2.jpg" class="card-img-top" alt="Kuliner Desa">
                        <div class="card-body">
                            <h5 class="card-title">Kuliner Desa</h5>
                            <p class="card-text">Rasakan nikmatnya jajanan khas dan kuliner lokal yang menggoda selera.</p>
                            <a href="/wisata/kuliner-desa" class="btn btn-sm btn-success">Lihat Detail</a>
                        </div>
                    </div>
                </div>

                <!-- Wisata 3 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <img src="/img/wisata3.jpg" class="card-img-top" alt="Kegiatan Warga">
                        <div class="card-body">
                            <h5 class="card-title">Kegiatan Warga</h5>
                            <p class="card-text">Berbagai kegiatan budaya dan kebersamaan warga desa yang menarik untuk dikunjungi.</p>
                            <a href="/wisata/kegiatan-warga" class="btn btn-sm btn-success">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Statistik -->
    <div class="py-5 text-center">
        <h2>Potensi dan Data Desa</h2>
        <div class="d-flex justify-content-center flex-wrap gap-5 mt-4">
            <div>
                <h3 style="color: #3ca55c;">1.520</h3>
                <p>Jumlah Penduduk</p>
            </div>
            <div>
                <h3 style="color: #3ca55c;">4</h3>
                <p>Dusun</p>
            </div>
            <div>
                <h3 style="color: #3ca55c;">7</h3>
                <p>UMKM Aktif</p>
            </div>
        </div>
    </div>

    <!-- Kontak Singkat -->
    <div style="padding: 60px 20px; background-color: #fff;">
        <div class="container">
            <h2 class="text-center mb-4">Hubungi Kami</h2>
            <div class="row justify-content-center align-items-center text-center">
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="p-3 border rounded shadow-sm">
                        <h5 class="mb-2">Alamat</h5>
                        <p class="mb-0">Jl. Raya Cintalaksana No.1, Kec. Tegalwaru, Kab. Karawang, Jawa Barat</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="p-3 border rounded shadow-sm">
                        <h5 class="mb-2">Telepon</h5>
                        <p class="mb-0">+62 812-3456-7890</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="p-3 border rounded shadow-sm">
                        <h5 class="mb-2">Email</h5>
                        <p class="mb-0">desacintalaksana@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="text-center mt-3">
                <a href="https://maps.app.goo.gl/51YLUaAaii6gHPyK7?g_st=aw" target="_blank" class="btn btn-success">
                    Lihat di Google Maps
                </a>
            </div>
        </div>
    </div>
@endsection