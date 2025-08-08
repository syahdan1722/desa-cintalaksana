<!DOCTYPE html>
<html>
<head>
    <title>Upload Berita</title>
</head>
<body>
    <h2>Form Upload Berita</h2>

    @if(session('success'))
        <div style="color: green;">{{ session('success') }}</div>
    @endif

    <form action="{{ url('/berita') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label>Judul:</label><br>
        <input type="text" name="judul" required><br><br>

        <label>Isi:</label><br>
        <textarea name="isi" required></textarea><br><br>

        <label>Gambar:</label><br>
        <input type="file" name="gambar"><br><br>

        <button type="submit">Kirim</button>
    </form>
</body>
</html>
