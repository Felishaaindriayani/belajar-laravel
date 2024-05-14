<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>
        <h2>Data Tabel Produk</h2>
        <table border="1">
            <tr>
                <th>NO</th>
                <th>ID</th>
                <th>Nama Produk</th>
                <th>Jumlah</th>
                <th>Tanggal Produksi</th>
                <th>Nama Merek</th>
            </tr>
            @php $no = 1; @endphp
            @foreach ($produk as $data)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $data->id }}</td>
                <td>{{ $data->nama_produk}}</td>
                <td>{{ $data->jumlah}}</td>
                <td>{{ $data->tanggal_produksi}}</td>
                <td>{{ $data->merek->nama_merek}}</td>
            </tr>
            @endforeach  
        </table>
    </center>
</body>
</html>