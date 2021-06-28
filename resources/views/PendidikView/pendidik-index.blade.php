@extends('layouts.app2')
@section('title','Main Menu')
<div style="background-image: url(image/2.jpg);">
@section('content')
<div class = "container ">
<div class="row justify-content-md-center">
<div class = "col-md-9">
    <div class="box">
        <div class="box-header">
         <!-- /.box-header -->
         <br>
        <div class="box-body">
        <table class="table table-light">
      <thead class="thead-dark">
      <tr>
<div>
<div class  = "row">
	<form action="/pendidik" method="GET">
  <div class = "col-sm-8">
  <a href="/pendidik/create" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah</a>  
  <a href="/pendidik/cetak" target="_blank" class="btn btn-success btn-sm"><i class="fas fa-print"></i>Cetak Data</a></h3>
  </div>
  <div class = "col-sm-4">       
		<input type="text" width = "40px;"name="cari" placeholder="Cari Nama .."  value="{{ old('cari') }}">
		<input type="submit" value="CARI">
    </div>
    </div>
	</form>
      </div></form>
      <br>
          <th></th>
          <th>Tenaga Pendidik</th>
          <th></th>
      </tr>
      </thead>
      <tbody>
      <tr class = "font-weight-bolder">  
          <td>NIP</td>
          <td>Nama</td>
          <td>Option </td>
      </tr>
      @foreach($dtPendidik as $pd)
      <tr>
      <td>{{$pd->nip}}</td>
      <td>{{$pd->nama}}</td>
      <td>
      <form action="/pendidik/{{$pd->id}}" method="post" class="d-inline">
    @method('delete')
    @csrf
    <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
      </form>
      <a href="/pendidik/{{$pd->id}}" class="btn btn-info"><i class="fas fa-eye"></i></a>
      </td>
      </tr>
      @endforeach
      </tbody>  
    </table>
    {{$dtPendidik->links()}}
</div>
</div>
</div>
@endsection