<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Admin</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet" />

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f6f9;
            margin: 0;
            transition: background 0.3s, color 0.3s;
        }

        .sidebar {
            width: 240px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            position: fixed;
            top: 0;
            left: 0;
            height: 100vh;
            overflow-y: auto;
            color: white;
            transition: all 0.3s ease;
            z-index: 1000;
        }

        .sidebar.hidden {
            left: -250px;
        }

        .sidebar h2 {
            text-align: center;
            font-size: 18px;
            margin: 15px 0;
            white-space: nowrap;
        }

        .avatar {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            object-fit: cover;
            margin: 0 auto 15px;
            border: 2px solid white;
            display: block;
        }

        .nav-links {
            display: flex;
            flex-direction: column;
        }

        .nav-links a {
            padding: 12px 20px;
            color: white;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 10px;
            transition: background-color 0.3s ease, transform 0.2s ease;
            opacity: 0;
            transform: translateX(-20px);
            animation: slideIn 0.5s forwards;
        }

        .nav-links a:hover,
        .nav-links a.active {
            background-color: rgba(255, 255, 255, 0.15);
            transform: scale(1.03);
        }

        .logout-link {
            padding: 14px 20px;
            background-color: #c0392b;
            color: white;
            text-align: center;
            text-decoration: none;
            font-weight: bold;
            display: block;
            transition: background-color 0.3s ease;
        }

        .logout-link:hover {
            background-color: #a93226;
        }

        .main {
            margin-left: 240px;
            padding: 30px 30px 30px 50px;
            transition: margin-left 0.3s ease;
        }

        .main.full {
            margin-left: 0 !important;
        }

        .toggle-btn {
            position: fixed;
            top: 20px;
            left: 20px;
            background: #667eea;
            border: none;
            color: white;
            padding: 8px 12px;
            border-radius: 6px;
            z-index: 1101;
            transition: left 0.3s ease;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
        }

        .footer {
            text-align: center;
            margin-top: 40px;
            color: #888;
            font-size: 14px;
        }

        .dark-mode {
            background-color: #1e1e2f !important;
            color: #ddd !important;
        }

        .dark-mode .sidebar {
            background: linear-gradient(135deg, #232526, #414345);
            color: #eee;
        }

        .dark-mode .nav-links a:hover,
        .dark-mode .nav-links a.active {
            background-color: rgba(255, 255, 255, 0.2);
        }

        @keyframes slideIn {
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        /* ✅ Responsive fix */
        @media (max-width: 768px) {
            .sidebar {
                left: 0;
                width: 250px;
            }

            .sidebar.hidden {
                left: -250px !important;
            }

            .main {
                margin-left: 0;
                padding: 20px;
            }

            .main.full {
                margin-left: 0 !important;
            }

            .toggle-btn {
                left: 15px !important;
            }
        }
    </style>
</head>
<body id="appBody">
    <div class="sidebar" id="sidebar">
        <div>
            <h2>ADMIN</h2>
            <img src="{{ asset('img/administrator.png') }}" alt="Avatar" class="avatar">

            <div class="nav-links">
                <a href="/admin" style="animation-delay: 0.05s;"><i class="bi bi-speedometer2"></i> Dashboard</a>
                <a href="/admin/profil" style="animation-delay: 0.1s;" class="{{ request()->is('admin/profil') ? 'active' : '' }}"><i class="bi bi-person-circle"></i> Profil</a>
                <a href="/admin/berita" style="animation-delay: 0.15s;" class="{{ request()->is('admin/berita*') ? 'active' : '' }}"><i class="bi bi-megaphone"></i> Berita</a>
                <a href="/admin/wisata" style="animation-delay: 0.2s;" class="{{ request()->is('admin/wisata*') ? 'active' : '' }}"><i class="bi bi-map"></i> Wisata</a>
                <a href="/admin/galeri" style="animation-delay: 0.25s;" class="{{ request()->is('admin/galeri*') ? 'active' : '' }}"><i class="bi bi-image-alt"></i> Galeri</a>
                <a href="/admin/layanan" style="animation-delay: 0.3s;" class="{{ request()->is('admin/layanan*') ? 'active' : '' }}"><i class="bi bi-headset"></i> Layanan</a>
                <a href="/admin/kontak" style="animation-delay: 0.35s;" class="{{ request()->is('admin/kontak') ? 'active' : '' }}"><i class="bi bi-envelope-paper"></i> Kontak</a>
                <a href="/admin/settings" style="animation-delay: 0.4s;" class="{{ request()->is('admin/settings') ? 'active' : '' }}"><i class="bi bi-sliders2"></i> Pengaturan</a>
                <a href="/" target="_blank" style="animation-delay: 0.45s;"><i class="bi bi-house-door"></i> Kembali ke Web</a>
                <button onclick="toggleDarkMode()" class="btn btn-sm text-white text-start ms-3 mt-2" style="animation-delay: 0.5s;"><i class="bi bi-moon"></i> Mode Gelap</button>
            </div>
        </div>

        <a href="/admin/logout" class="logout-link"><i class="bi bi-box-arrow-right"></i> Logout</a>
    </div>

    <!-- Toggle Button -->
    <button class="toggle-btn" id="toggleSidebar"><i class="bi bi-list"></i></button>

    <div class="main" id="mainContent">
        <h1 class="mb-4 mt-5">@yield('title')</h1>
        @yield('content')

        <div class="footer">
            &copy; 2025 Admin - Desa Cintalaksana
        </div>
    </div>

    <!-- Script -->
    <script>
        const sidebar = document.getElementById('sidebar');
        const mainContent = document.getElementById('mainContent');
        const toggleBtn = document.getElementById('toggleSidebar');
        const appBody = document.getElementById('appBody');

        toggleBtn.addEventListener('click', () => {
            sidebar.classList.toggle('hidden');
            mainContent.classList.toggle('full');
        });

        window.addEventListener('DOMContentLoaded', () => {
            const darkMode = localStorage.getItem('darkMode') === 'true';
            if (darkMode) {
                appBody.classList.add('dark-mode');
            }
        });

        function toggleDarkMode() {
            appBody.classList.toggle('dark-mode');
            const isDark = appBody.classList.contains('dark-mode');
            localStorage.setItem('darkMode', isDark);
        }
    </script>
</body>
</html>