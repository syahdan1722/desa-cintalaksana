<?php

namespace App\Http\Controllers;

use App\Models\Galeri; // <-- ini WAJIB ADA
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class GaleriController extends Controller
{
    public function index()
    {
        $galeris = Galeri::latest()->get();
        return view('galeri.index', compact('galeris'));
    }

    public function create()
    {
        return view('galeri.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'judul' => 'required|string',
            'deskripsi' => 'nullable|string',
            'gambar' => 'required|image|mimes:jpeg,jpg,png|max:2048'
        ]);

        $data['gambar'] = $request->file('gambar')->store('galeri', 'public');

        Galeri::create($data);
        return redirect()->route('galeri.index')->with('success', 'Foto berhasil ditambahkan!');
    }

    public function destroy($id)
    {
        $galeri = Galeri::findOrFail($id);
        $galeri->delete();
        return back()->with('success', 'Foto berhasil dihapus!');
        
    }
    public function edit($id)
    {
    $galeri = Galeri::findOrFail($id);
    return view('galeri.edit', compact('galeri'));
    }

public function update(Request $request, $id)
    {
    $data = $request->validate([
        'judul' => 'required|string',
        'deskripsi' => 'nullable|string',
        'gambar' => 'nullable|image|mimes:jpeg,jpg,png|max:2048'
    ]);

    $galeri = Galeri::findOrFail($id);

    if ($request->hasFile('gambar')) {
        $data['gambar'] = $request->file('gambar')->store('galeri', 'public');
    }

    $galeri->update($data);
    return redirect()->route('galeri.index')->with('success', 'Galeri berhasil diperbarui!');
    }
    
}
