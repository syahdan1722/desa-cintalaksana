<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Routing untuk website Desa Cintalaksana:
| - Halaman Umum
| - Halaman Admin (Frontend)
|
*/

// ===============================
// Routing Halaman Umum (Pengunjung)
// ===============================
Route::get('/', [BerandaController::class, 'index']);

Route::get('/profil', function () {
    return view('pages.profil');
});

Route::get('/berita', function () {
    return view('pages.berita');
});

// Routing dinamis untuk detail berita (harus di bawah /berita)
Route::get('/berita/{slug}', function ($slug) {
    return view('pages.berita-detail', ['slug' => $slug]);
});

Route::get('/wisata', function () {
    return view('pages.wisata');
});

Route::get('/wisata/{slug}', function ($slug) {
    return view('pages.wisata-detail', ['slug' => $slug]);
});

Route::get('/kontak', function () {
    return view('pages.kontak');
});

Route::get('/galeri', function () {
    return view('pages.galeri');
});

Route::get('/galeri/{slug}', function ($slug) {
    return view('pages.galeri-detail', ['slug' => $slug]);
});

Route::get('/layanan', function () {
    return view('pages.layanan');
});


// ===============================
// Routing Halaman Admin (Statis / Frontend Only)
// ===============================
Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    });

    // BERITA
    Route::get('/berita', function () {
        return view('admin.berita.index');
    });
    Route::get('/berita/create', function () {
        return view('admin.berita.create');
    });
    Route::get('/berita/edit', function () {
        return view('admin.berita.edit');
    });

    // WISATA
    Route::get('/wisata', function () {
        return view('admin.wisata.index');
    });
    Route::get('/wisata/create', function () {
        return view('admin.wisata.create');
    });
    Route::get('/wisata/edit', function () {
        return view('admin.wisata.edit');
    });

    // PROFIL
    Route::get('/profil', function () {
        return view('admin.profil.index');
    });

    // GALERI
    Route::get('/galeri', function () {
        return view('admin.galeri.index');
    });
    Route::get('/galeri/create', function () {
        return view('admin.galeri.create');
    });
    Route::get('/galeri/edit', function () {
        return view('admin.galeri.edit');
    });

    // LAYANAN / PENGADUAN
    Route::get('/layanan', function () {
        return view('admin.layanan.index');
    });

    // KONTAK
    Route::get('/kontak', function () {
        return view('admin.kontak.index');
    });

    // PENGATURAN AKUN
    Route::get('/settings', function () {
        return view('admin.settings.index');
    });
});

// ===============================
// Routing Login/register/logout Admin (Frontend Only)
// ===============================
Route::get('/admin/login', function () {
    return view('auth.login');
});

Route::get('/admin/register', function () {
    return view('auth.register');
});


Route::get('/admin/logout', function () {
    return redirect('/admin/login');
});