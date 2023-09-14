<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>LUAS</th>
                <th>HARGA</th>
            </tr>
        </thead>
        <tbody>
            @foreach($perumahan as $data)
            <tr>
                <td>{{ $data -> id_perumahan}}</td>
                <td>{{ $data -> luas_perumahan." m2"}}</td>
                <td>{{ "Rp. ".$data -> harga_perumahan}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>