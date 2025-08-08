<!DOCTYPE html>
<html>
<head>
    <title>Edit Berita</title>
</head>
<body>
    <h2>Edit Berita</h2>

    @if ($errors->any())
        <div style="color:red;">
            <ul>
                @foreach ($errors->all() as $err)
                    <li>{{ $err }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('berita.update', $berita->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <label for="judul">Judul:</label><br>
        <input type="text" name="judul" value="{{ old('judul', $berita->judul) }}" required><br><br>

        <label for="isi">Isi:</label><br>
        <textarea name="isi" rows="4" required>{{ old('isi', $berita->isi) }}</textarea><br><br>

        @if($berita->gambar)
            <p>Gambar lama:</p>
            <img src="{{ asset('storage/berita/' . $berita->gambar) }}" width="150"><br><br>
        @endif

        <label for="gambar">Gambar Baru (opsional):</label><br>
        <input type="file" name="gambar"><br><br>

        <button type="submit">Perbarui</button>
    </form>
</body>
</html>
