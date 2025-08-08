<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Wisata</title>
</head>
<body>
    <h2>Tambah Wisata Baru</h2>

    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('wisata.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label>Nama:</label><br>
        <input type="text" name="nama" required><br><br>

        <label>Deskripsi:</label><br>
        <textarea name="deskripsi" rows="4" required></textarea><br><br>

        <label>Lokasi:</label><br>
        <input type="text" name="lokasi" required><br><br>

        <label>Gambar:</label><br>
        <input type="file" name="gambar"><br><br>

        <button type="submit">Simpan</button>
    </form>

    <br><a href="{{ route('wisata.index') }}">← Kembali</a>
</body>
</html>
