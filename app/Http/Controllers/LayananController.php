<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LayananController extends Controller
{
    /**
     * Menampilkan semua data layanan.
     */
    public function index()
    {
        $layanans = Layanan::all();
        return view('layanan.index', compact('layanans'));
    }

    /**
     * Menampilkan form untuk membuat layanan baru.
     */
    public function create()
    {
        return view('layanan.create');
    }

    /**
     * Menyimpan data layanan baru.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'kontak' => 'required|string|max:255',
            'gambar' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('layanan', 'public');
        }

        Layanan::create($data);

        return redirect()->route('layanan.index')->with('success', 'Layanan berhasil ditambahkan.');
    }

    /**
     * Menampilkan form edit layanan.
     */
    public function edit(Layanan $layanan)
    {
        return view('layanan.edit', compact('layanan'));
    }

    /**
     * Memperbarui data layanan.
     */
    public function update(Request $request, Layanan $layanan)
    {
        $data = $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'kontak' => 'required|string|max:255',
            'gambar' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($layanan->gambar && Storage::disk('public')->exists($layanan->gambar)) {
                Storage::disk('public')->delete($layanan->gambar);
            }

            $data['gambar'] = $request->file('gambar')->store('layanan', 'public');
        }

        $layanan->update($data);

        return redirect()->route('layanan.index')->with('success', 'Layanan berhasil diperbarui.');
    }

    /**
     * Menghapus layanan.
     */
    public function destroy(Layanan $layanan)
    {
        if ($layanan->gambar && Storage::disk('public')->exists($layanan->gambar)) {
            Storage::disk('public')->delete($layanan->gambar);
        }

        $layanan->delete();

        return redirect()->route('layanan.index')->with('success', 'Layanan berhasil dihapus.');
    }
}
