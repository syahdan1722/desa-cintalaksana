<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Desa Cintalaksana</title>
    <meta name="description" content="Website resmi Desa Cintalaksana, Kecamatan Tegalwaru, Karawang. Menyajikan informasi berita, wisata, UMKM, dan kegiatan masyarakat.">
    <meta name="keywords" content="desa cintalaksana, tegalwaru, wisata karawang, website desa">
    <meta property="og:image" content="{{ asset('logo-desa.png') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f6f6f6;
            margin: 0;
        }

        .with-padding {
            padding-top: 80px;
        }

        .navbar {
            background: linear-gradient(135deg, #3ca55c, #b5ac49);
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand img {
            height: 40px;
            margin-right: 10px;
        }

        .navbar-nav .nav-link {
            color: white;
            font-weight: 500;
            position: relative;
        }

        .navbar-nav .nav-link.active::after {
            content: '';
            position: absolute;
            bottom: -6px;
            left: 0;
            right: 0;
            height: 3px;
            background-color: white;
            border-radius: 2px;
        }

        .card:hover {
            transform: translateY(-5px);
            transition: 0.3s ease;
            box-shadow: 0 6px 20px rgba(0,0,0,0.1);
        }

        .carousel-caption {
            background: rgba(0, 0, 0, 0.5);
            padding: 20px;
            border-radius: 10px;
        }

        .carousel-caption h1,
        .carousel-caption p {
            color: white;
        }

        footer {
            background: linear-gradient(135deg, #3ca55c, #b5ac49);
            color: white;
            margin-top: 50px;
        }

        footer a {
            color: white;
        }

        footer a:hover {
            text-decoration: underline;
        }

        .btn-success {
            background: linear-gradient(135deg, #3ca55c, #b5ac49) !important;
            border: none !important;
            color: white !important;
        }

        .btn-outline-success {
            background-color: transparent;
            border: 2px solid #3ca55c;
            color: #3ca55c;
        }

        .btn-outline-success:hover {
            background: linear-gradient(135deg, #3ca55c, #b5ac49);
            color: white;
        }

        a {
            color: #3ca55c;
        }

        a:hover {
            color: #b5ac49;
        }
    </style>
</head>
<body class="{{ Request::is('/') ? '' : 'with-padding' }}">

    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center text-white" href="/">
                <img src="{{ asset('logo-desa.png') }}" alt="Logo">
                <span class="fw-bold">Desa Cintalaksana</span>
            </a>
            <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon" style="filter: invert(1);"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="/" class="nav-link {{ Request::is('/') ? 'active' : '' }}">Beranda</a></li>
                    <li class="nav-item"><a href="/profil" class="nav-link {{ Request::is('profil') ? 'active' : '' }}">Profil</a></li>
                    <li class="nav-item"><a href="/berita" class="nav-link {{ Request::is('berita*') ? 'active' : '' }}">Berita</a></li>
                    <li class="nav-item"><a href="/wisata" class="nav-link {{ Request::is('wisata*') ? 'active' : '' }}">Wisata</a></li>
                    <li class="nav-item"><a href="/galeri" class="nav-link {{ Request::is('galeri') ? 'active' : '' }}">Galeri</a></li>
                    <li class="nav-item"><a href="/layanan" class="nav-link {{ Request::is('layanan') ? 'active' : '' }}">Layanan</a></li>
                    <li class="nav-item"><a href="/kontak" class="nav-link {{ Request::is('kontak') ? 'active' : '' }}">Kontak</a></li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- Konten --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="pt-5 pb-3">
        <div class="container">
            <div class="row">
                <!-- Info Desa -->
                <div class="col-md-6 mb-4">
                    <h5>Desa Cintalaksana</h5>
                    <p class="mb-1">Kecamatan Tegalwaru, Kabupaten Karawang</p>
                    <p class="mb-1">Jawa Barat, Indonesia</p>
                    <p>Email: cintalaksana@karawangkab.go.id</p>
                    <p>Telepon: (0267) 123456</p>
                </div>

                <!-- Menu Cepat -->
                <div class="col-md-3 mb-4">
                    <h6>Menu</h6>
                    <ul class="list-unstyled">
                        <li><a href="/">Beranda</a></li>
                        <li><a href="/profil">Profil</a></li>
                        <li><a href="/berita">Berita</a></li>
                        <li><a href="/wisata">Wisata</a></li>
                        <li><a href="/galeri">Galeri</a></li>
                        <li><a href="/layanan">Layanan</a></li>
                        <li><a href="/kontak">Kontak</a></li>
                    </ul>
                </div>

                <!-- Sosial Media -->
                <div class="col-md-3 mb-4">
                    <h6>Ikuti Kami</h6>
                    <p><i class="bi bi-facebook me-1"></i> <a href="#">Facebook</a></p>
                    <p><i class="bi bi-instagram me-1"></i> <a href="#">Instagram</a></p>
                    <p><i class="bi bi-youtube me-1"></i> <a href="#">YouTube</a></p>
                </div>
            </div>
            <hr class="border-top border-light">
            <p class="text-center mb-0">&copy; {{ date('Y') }} Desa Cintalaksana - Universitas Buana Perjuangan Karawang</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script>
        ScrollReveal().reveal('.card, .img-fluid, .container h2, .container p', {
            delay: 100,
            distance: '50px',
            origin: 'bottom',
            duration: 800,
            easing: 'ease-in-out',
            reset: false
        });
    </script>
</body>
</html>