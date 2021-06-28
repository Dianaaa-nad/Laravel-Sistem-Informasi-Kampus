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
    <title>CETAK DATA FAKULTAS</title>
</head>
<body>
    <div class="form-group">
        <p align="center"><b>Laporan Fakultas</b></p>
        <table class="static" align="center" rules="all" border="1px" style= "width: 95%;">
        <tr>
            <td>No</td>
            <td>Fakultas</td>
            <td>Dekan</td>
        </tr>

        @foreach ($dtCetak as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->fakultas }}</td>
            <td>{{ $item->dekan }}</td>
        </tr>
        @endforeach
        </table>
    </div>

    <script type="text/javascript">
        window.print();

    </script>
</body>
</html>