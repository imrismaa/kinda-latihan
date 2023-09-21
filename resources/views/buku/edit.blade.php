<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action="{{route('mahasiswa.update',$mahasiswa->id)}}" method="POST">
        @csrf
        <div>Judul
            <input type="text" name="nama" id="nama" value="{{$mahasiswa->nama}}">
        </div>
        <div>Jurusan
            <input type="text" name="jurusan" id="jurusan" value="{{$mahasiswa->jurusan}}">
            
        </div>
        <div><button type="submit">Simpan</button></div>
        <a href="/mahasiswa"> Batal</a>
    </form>
    </div>
</body>
</html>