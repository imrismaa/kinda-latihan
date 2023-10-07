<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku</title>
    <style>
        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        h4 {
            text-align: center;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        div {
            margin-bottom: 10px;
            margin-right: 20px;
        }

        label {
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px;
            cursor: pointer;
        }

        a {
            text-decoration: none;
            color: #FF0000;
        }
    </style>
</head>
<body>
    <div class="container">
        <h4>Tambah Buku</h4>
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
            <div class"button">
                <button type="submit">Simpan</button>
                <a href="/buku">Batal</a>
            </div>
        </form>
    </div>
</body>
</html>