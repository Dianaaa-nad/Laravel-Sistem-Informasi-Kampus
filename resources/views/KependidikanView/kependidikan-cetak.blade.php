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
    <title>CETAK DATA TENAGA KEPENDIDIKAN</title>
</head>
<body>
    <div class="form-group">
        <p align="center"><b>Tenaga Kependidikan</b></p>
        <table class="static" align="center" rules="all" border="1px" style= "width: 95%;">
        <tr>
            <td>NIP</td>
            <td>Nama</td>
            <td>Foto</td>
        </tr>
        @foreach ($dtCetak as $item)
        <tr>          
            <td>{{ $item->nip }}</td>
            <td>{{ $item->nama }}                           </td>
            <td align="center">
            <img src ="{{asset('img/'.$item->foto) }}" height ="10%" width ="10%"  class="" alt="...">
            </td>
        </tr>
        @endforeach    
        </table>
    </div>
    <script type="text/javascript">
        window.print();
    </script>
</body>
</html>