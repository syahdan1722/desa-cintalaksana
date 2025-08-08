<?php

namespace App\Http\Controllers;

use App\Models\Beranda;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {
        $beranda = Beranda::first(); // ambil data pertama dari tabel berandas
        return view('pages.beranda', compact('beranda'));
    }
}