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
        <table border="1">
            <tr>
                <th>NO</th>
                <th>ID</th>
                <th>Nama Pembeli</th>
                <th>Jenis Kelamin</th>
            </tr>
            @php $no = 1; @endphp
            @foreach ($pembeli as $data)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $data->id }}</td>
                <td>{{ $data->nama_pembeli}}</td>
                <td>{{ $data->jenis_kelamin}}</td>
            </tr>
            @endforeach  
        </table>
    </center>
</body>
</html>