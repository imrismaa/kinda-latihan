<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tfoot tr {
            background-color: #e0e0e0;
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>Judul Buku</th>
                <th>Penulis</th>
                <th>Harga</th>
                <th>Tanggal Terbit</th>
                <th colspan="2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data_buku as $buku)
            <tr>
                <td>{{ $buku->id }}</td>
                <td>{{ $buku->judul }}</td>
                <td>{{ $buku->penulis }}</td>
                <td>{{ "Rp ".number_format($buku->harga, 2, ',', '.') }}</td>
                <td>{{ \Carbon\Carbon::parse($buku->tgl_terbit)->format('d/m/Y') }}</td>
                <td>
                    <form action="{{ route('buku.destroy', $buku->id) }}" method="post">
                        @csrf
                        <button onclick="return confirm('yakin mau dihapus?')">Hapus</button>
                    </form>
                </td>
                <td>
                    <button><a href="{{ route('buku.edit', $buku->id) }}">Edit</a></button> 
                </td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <td colspan="3">TOTAL HARGA</td>
                <td colspan="4">{{ "Rp ".number_format($total_harga, 2, ',', '.') }}</td>
            </tr>
            <tr>
                <td colspan="3">JUMLAH BUKU</td>
                <td colspan="4">{{ $jumlah_data }}</td>
            </tr>
        </tfoot>
    </table>
    <p align="right"><a href="{{ route('buku.create') }}">Tambah Buku</a></p>
</body>
</html>
