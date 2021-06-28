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
    <title>CETAK DATA KELAS</title>
</head>
<body>
    <div class="form-group">
        <p align="center"><b>Laporan Data Kelas</b></p>
        <table class="static"  rules="all" border="1px" style= "width: 95%;" "align: center;" >
        <tr>
            <td>No</td>
            <td>Nama Kelas</td>
            <td>Prodi</td>
            <td>Ruang Kelas</td>
        </tr>
        @foreach ($dtCetak as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->nama_kls }}</td>
            <td>{{ $item->prodi }}</td>
            <td>{{ $item->ruang_kelas }}</td>
        </tr>
        @endforeach
        </table>
    </div>
    <script type="text/javascript">
        window.print();
    </script>
</body>
</html>