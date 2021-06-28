<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http_equity="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        table.static {
            position: relative;
            /* left:3%; */
            border: 1px solid #543535;
        }
    </style>
    <title>CETAK JADWAL PERKULIAHAN</title>
</head>
<body>
    <div class="form-group">
        <p align="center"><b>JADWAL PERKULIAHAN</b></p>
        <table class="static" align="center" rules="all" border="1px" style= "width: 95%;">
        <tr>
            <td>No</td>
            <td>Mata Kuliah</td>
            <td>Pengajar</td>
            <td>Kelas</td>
            <td>Jadwal</td>
            <td>Ruangan</td>
        </tr>
        @foreach ($dtCetak as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->nama_matkul }}</td>
            <td>{{ $item->nama }}</td>
            <td>{{ $item->nama_kls }}</td>
            <td>{{ $item->jadwal }}</td>
            <td>{{ $item->ruang }}</td>
        </tr>
        @endforeach
        </table>
    </div>
    <script type="text/javascript">
        window.print();
    </script>
</body>
</html>