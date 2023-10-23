<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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

        button {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 16px;
            margin-bottom: 10px;
        }

        a {
            text-decoration: none;
            color: white;
        }
    </style>
</head>
<body>
    @if(Session::has('stored_message'))
        <div class="alert alert-success">{{Session::get('stored_message')}}</div>
    @endif
    @if(Session::has('edited_message'))
        <div class="alert alert-success">{{Session::get('edited_message')}}</div>
    @endif
    @if(Session::has('deleted_message'))
        <div class="alert alert-success">{{Session::get('deleted_message')}}</div>
    @endif
    <h4 align="center">Daftar Buku</h4>
    <button align="right">
        <a href="{{ route('buku.create') }}">Tambah Buku</a>
    </button>
    <form action="{{ route('buku.search') }}" method="get">
        @csrf
        <input type="text" name="kata" class="form-control" placeholder="Cari ..." style="width: 30%;
            display: inline; margin-top: 10px; margin-bottom: 10px; float: right;">
    </form>

    @if(count($data_buku))
        <div class"alert alert-success">Ditemukan <strong>{{ count($data_buku) }}</strong> data dengan kata: <strong>{{ $cari }}</strong></div>
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
    @else
        <div class="alert alert-warning"><h4>Data {{ $cari }} tidak ditemukan</h4></div>
        <a href="/buku" class="btn btn-warning">Kembali</a>
    @endif
    <div>
        {{ $data_buku->links() }}
    </div>
    <div>
        <strong>Jumlah Buku: {{ $jumlah_data }}</strong>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
