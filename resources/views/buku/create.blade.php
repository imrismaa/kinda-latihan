<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku</title>
</head>
<body>
    <div class="container">
        <h4>Tambah Mahasiswa</h4>
        <form action="{{route('buku.store')}}" method="POST">
            @csrf
            <div>Judul
                <input type="text" name="judul" id="judul" >
            </div>
            <div>Penulis
                <input type="text" name="penulis" id="penulis">
            </div>
            <div>Harga
                <input type="text" name="harga" id="harga">
            </div>
            <div>Tanggal Terbit
                <input type="date" name="tgl_terbit" id="tgl_terbit">
            </div>
            <div><button type="submit">Simpan</button></div>
            <a href="/buku">Batal</a>
        </form>
    </div>
</body>
</html>