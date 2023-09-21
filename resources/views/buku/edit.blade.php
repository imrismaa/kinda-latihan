<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action="{{route('buku.update',$buku->id)}}" method="POST">
        @csrf
        <div>Judul
            <input type="text" name="judul" id="judul" value="{{$buku->judul}}">
        </div>
        <div>Penulis
            <input type="text" name="penulis" id="penulis" value="{{$buku->penulis}}">
        </div>
        <div>Harga
            <input type="text" name="harga" id="harga" value="{{$buku->harga}}">
        </div>
        <div>Tanggal Terbit
            <input type="date" name="tgl_terbit" id="tgl_terbit" value="{{$buku->tgl_terbit}}">
        </div>
        <div><button type="submit">Simpan</button></div>
        <a href="/buku"> Batal</a>
    </form>
    </div>
</body>
</html>