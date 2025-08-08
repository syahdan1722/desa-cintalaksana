<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Desa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <!-- Navbar -->
    <header class="bg-gradient-to-r from-green-600 to-yellow-500 text-white shadow">
        <div class="max-w-7xl mx-auto flex items-center justify-between px-6 py-3">
            
            <!-- Logo dan Nama Desa -->
            <div class="flex items-center space-x-3">
                <img src="{{ asset('images/logo-desa.png') }}" alt="Logo Desa" class="h-10 w-10 rounded-full">
                <span class="text-lg font-bold">Desa Cintalaksana</span>
            </div>

            <!-- Menu Navigasi -->
            <nav class="space-x-6 font-semibold">
                <a href="/" class="hover:underline @if(request()->is('/')) underline @endif">Beranda</a>
                <a href="/profil" class="hover:underline @if(request()->is('profil')) underline @endif">Profil</a>
                <a href="/berita" class="hover:underline @if(request()->is('berita')) underline @endif">Berita</a>
                <a href="/wisata" class="hover:underline @if(request()->is('wisata')) underline @endif">Wisata</a>
                <a href="/galeri" class="hover:underline @if(request()->is('galeri')) underline @endif">Galeri</a>
                <a href="/layanan" class="hover:underline @if(request()->is('layanan')) underline @endif">Layanan</a>
                <a href="/kontak" class="hover:underline @if(request()->is('kontak')) underline @endif">Kontak</a>
            </nav>
        </div>
    </header>

    <!-- Konten Utama -->
    <main class="p-6 max-w-7xl mx-auto">
        @yield('content')
    </main>

</body>
</html>
