<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Wisata</title>
</head>
<body>
    <h2>Edit Wisata</h2>

    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('wisata.update', $wisata->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <label>Nama:</label><br>
        <input type="text" name="nama" value="{{ $wisata->nama }}" required><br><br>

        <label>Deskripsi:</label><br>
        <textarea name="deskripsi" rows="4" required>{{ $wisata->deskripsi }}</textarea><br><br>

        <label>Lokasi:</label><br>
        <input type="text" name="lokasi" value="{{ $wisata->lokasi }}" required><br><br>

        <label>Gambar Saat Ini:</label><br>
        @if ($wisata->gambar)
            <img src="{{ asset('storage/wisata/' . $wisata->gambar) }}" width="120"><br>
        @else
            Tidak ada gambar<br>
        @endif

        <label>Ganti Gambar (opsional):</label><br>
        <input type="file" name="gambar"><br><br>

        <button type="submit">Update</button>
    </form>

    <br><a href="{{ route('wisata.index') }}">← Kembali</a>
</body>
</html>
