<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Galeri;
use App\Models\Layanan;
use App\Models\Wisata;
use App\Models\Profil;
use App\Http\Controllers\Controller;

class BerandaController extends Controller
{
    public function index()
    {
        $profil = Profil::first(); // ✅ Tambahkan ini
        $beritas = Berita::latest()->take(3)->get();
        $galeris = Galeri::latest()->take(6)->get();
        $layanans = Layanan::all();
        $wisatas = Wisata::latest()->take(3)->get();

        return view('beranda.index', compact('profil', 'beritas', 'galeris', 'layanans', 'wisatas'));
    }
    }

    class DashboardController extends Controller
    {
    public function index()
    {
        return view('dashboard.index');
    }
    }
