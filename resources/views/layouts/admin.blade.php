<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            min-height: 100vh;
        }
        .sidebar {
            width: 220px;
            background-color: #198754;
            color: white;
            padding: 1rem;
        }
        .sidebar a {
            color: white;
            text-decoration: none;
            display: block;
            margin: 0.5rem 0;
        }
        .sidebar a:hover {
            text-decoration: underline;
        }
        .content {
            flex-grow: 1;
            padding: 2rem;
            background-color: #f8f9fa;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h4>Admin Desa</h4>
        <a href="{{ route('admin.dashboard') }}">Dashboard</a>
        <a href="{{ route('admin.profil.index') }}">Profil</a>
        <a href="{{ route('admin.berita.index') }}">Berita</a>
        <a href="{{ route('admin.wisata.index') }}">Wisata</a>
        <a href="{{ route('admin.layanan.index') }}">Layanan</a>
        <a href="{{ route('admin.galeri.index') }}">Galeri</a>
        <a href="{{ route('admin.kontak.index') }}">Kontak</a>
    </div>

    <div class="content">
        <h2>@yield('title')</h2>
        @yield('content')
    </div>
</body>
</html>
