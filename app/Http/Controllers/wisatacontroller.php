<?php

namespace App\Http\Controllers;

use App\Models\wisata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class wisatacontroller extends Controller
{
    public function index()
    {
        $wisatas = Wisata::all();
        return view('wisata.index', compact('wisatas'));
    }

    public function create()
    {
        return view('wisata.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string',
            'deskripsi' => 'required|string',
            'lokasi' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $namaFile = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/wisata', $namaFile);
            $validated['gambar'] = $namaFile;
        }

        Wisata::create($validated);
        return redirect('/wisata')->with('success', 'Data wisata berhasil disimpan.');
    }

    public function edit($id)
    {
        $wisata = Wisata::findOrFail($id);
        return view('wisata.edit', compact('wisata'));
    }

    public function update(Request $request, $id)
    {
        $wisata = Wisata::findOrFail($id);

        $validated = $request->validate([
            'nama' => 'required|string',
            'deskripsi' => 'required|string',
            'lokasi' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('gambar')) {
            if ($wisata->gambar && Storage::exists('public/wisata/' . $wisata->gambar)) {
                Storage::delete('public/wisata/' . $wisata->gambar);
            }
            $file = $request->file('gambar');
            $namaFile = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/wisata', $namaFile);
            $validated['gambar'] = $namaFile;
        }

        $wisata->update($validated);
        return redirect('/wisata')->with('success', 'Data wisata berhasil diupdate.');
    }

    public function destroy($id)
    {
        $wisata = Wisata::findOrFail($id);
        if ($wisata->gambar && Storage::exists('public/wisata/' . $wisata->gambar)) {
            Storage::delete('public/wisata/' . $wisata->gambar);
        }
        $wisata->delete();
        return redirect('/wisata')->with('success', 'Data wisata berhasil dihapus.');
    }
}
