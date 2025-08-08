@extends('layouts.admin')

@section('title', 'Profil Desa')

@section('content')
<div class="container">
    <h2 class="mb-4 fw-semibold">Edit Profil Desa Cintalaksana</h2>

    <div class="bg-white shadow rounded p-4 animate__animated animate__fadeIn">
        <form action="#" method="POST" enctype="multipart/form-data">
            {{-- @csrf --}}
            {{-- @method('PUT') --}}

            {{-- Sejarah Desa --}}
            <div class="mb-4">
                <label for="sejarah" class="form-label fw-medium">Sejarah Desa</label>
                <textarea class="form-control" id="sejarah" name="sejarah" rows="5" required>Desa Cintalaksana merupakan desa yang terletak di Kecamatan Tegalwaru, Kabupaten Karawang. Dahulu desa ini dikenal sebagai wilayah agraris dengan mayoritas penduduknya bertani. Seiring waktu, Cintalaksana berkembang menjadi desa yang tidak hanya mengandalkan sektor pertanian, tetapi juga mulai mengembangkan sektor pariwisata dan UMKM.</textarea>
            </div>

            {{-- Visi --}}
            <div class="mb-4">
                <label for="visi" class="form-label fw-medium">Visi</label>
                <textarea class="form-control" id="visi" name="visi" rows="2" required>"Mewujudkan Desa Cintalaksana yang Mandiri, Maju, dan Sejahtera Berbasis Potensi Lokal."</textarea>
            </div>

            {{-- Misi --}}
            <div class="mb-4">
                <label for="misi" class="form-label fw-medium">Misi</label>
                <textarea class="form-control" id="misi" name="misi" rows="5" required>
- Meningkatkan pelayanan publik yang cepat dan transparan.
- Mendorong pertumbuhan ekonomi desa melalui UMKM dan wisata.
- Melestarikan budaya gotong royong dan nilai kearifan lokal.
- Meningkatkan kualitas infrastruktur desa secara bertahap.
                </textarea>
                <small class="text-muted">Pisahkan misi dengan tanda "-" atau baris baru.</small>
            </div>

            {{-- Struktur Organisasi Dinamis --}}
            <div class="mb-4">
                <label class="form-label fw-medium">Struktur Organisasi (Dinamis)</label>
                <div id="struktur-container">
                    <div class="struktur-item border rounded p-3 mb-3 shadow-sm">
                        <div class="mb-2">
                            <label>Foto</label>
                            <input type="file" name="struktur[0][foto]" class="form-control">
                        </div>
                        <div class="mb-2">
                            <label>Nama</label>
                            <input type="text" name="struktur[0][nama]" class="form-control" placeholder="Nama">
                        </div>
                        <div class="mb-2">
                            <label>Jabatan</label>
                            <input type="text" name="struktur[0][jabatan]" class="form-control" placeholder="Jabatan">
                        </div>
                        <button type="button" class="btn btn-danger btn-sm" onclick="hapusStruktur(this)">Hapus</button>
                    </div>
                </div>

                <button type="button" class="btn btn-secondary btn-sm" onclick="tambahStruktur()">+ Tambah</button>
            </div>

            <button type="submit" class="btn btn-primary px-4">Simpan Perubahan</button>
        </form>
    </div>
</div>
@endsection

@section('scripts')
<script>
let strukturIndex = 1;

function tambahStruktur() {
    const container = document.getElementById('struktur-container');
    const item = document.createElement('div');
    item.classList.add('struktur-item', 'border', 'rounded', 'p-3', 'mb-3', 'shadow-sm');
    item.innerHTML = `
        <div class="mb-2">
            <label>Foto</label>
            <input type="file" name="struktur[${strukturIndex}][foto]" class="form-control">
        </div>
        <div class="mb-2">
            <label>Nama</label>
            <input type="text" name="struktur[${strukturIndex}][nama]" class="form-control" placeholder="Nama">
        </div>
        <div class="mb-2">
            <label>Jabatan</label>
            <input type="text" name="struktur[${strukturIndex}][jabatan]" class="form-control" placeholder="Jabatan">
        </div>
        <button type="button" class="btn btn-danger btn-sm" onclick="hapusStruktur(this)">Hapus</button>
    `;
    container.appendChild(item);
    strukturIndex++;
}

function hapusStruktur(button) {
    button.parentElement.remove();
}
</script>
@endsection