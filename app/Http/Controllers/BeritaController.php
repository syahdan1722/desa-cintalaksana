<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    // Menampilkan semua berita
    public function index()
    {
        $beritas = Berita::latest()->get();
        return view('berita.index', compact('beritas'));
    }

    // Form tambah berita
    public function create()
    {
        return view('berita.create');
    }

    // Menyimpan berita baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|string',
            'isi' => 'required|string',
            'tanggal' => 'required|date',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $namaFile = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/berita', $namaFile);
            $validated['gambar'] = $namaFile;
        }

        Berita::create($validated);

        return redirect()->route('berita.index')->with('success', 'Berita berhasil disimpan.');
    }

    // Form edit berita
    public function edit($id)
    {
        $berita = Berita::findOrFail($id);
        return view('berita.edit', compact('berita'));
    }

    // Update berita
    public function update(Request $request, $id)
    {
        $berita = Berita::findOrFail($id);

        $validated = $request->validate([
            'judul' => 'required|string',
            'isi' => 'required|string',
            'tanggal' => 'required|date',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($berita->gambar) {
                Storage::delete('public/berita/' . $berita->gambar);
            }

            $file = $request->file('gambar');
            $namaFile = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/berita', $namaFile);
            $validated['gambar'] = $namaFile;
        }

        $berita->update($validated);

        return redirect()->route('berita.index')->with('success', 'Berita berhasil diperbarui.');
    }

    // Hapus berita
    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);

        if ($berita->gambar) {
            Storage::delete('public/berita/' . $berita->gambar);
        }

        $berita->delete();

        return redirect()->route('berita.index')->with('success', 'Berita berhasil dihapus.');
    }
}
