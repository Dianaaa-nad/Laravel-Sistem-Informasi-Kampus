@extends('layouts.app2')
@section('title','Main Menu')
<div style="background-image: url(image/2.jpg);">
@section('content')
<div class = "container ">
<div class="row justify-content-md-center">
<div class = "col-md-9">
    <div class="box">
        <div class="box-header">
         <br>
        <div class="box-body">
        <table class="table table-light">
      <thead class="thead-dark">
      <tr>
<div>
<div class  = "row">
	<form action="/mahasiswa" method="GET">
  <div class = "col-sm-8">
  <a href="/mahasiswa/create" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah</a> 
  <a href="/mahasiswa/cetak" target="_blank" class="btn btn-success btn-sm"><i class="fas fa-print"></i>Cetak Data</a></h3>
  </div>
  <div class = "col-sm-4">       
		<input type="text" width = "40px;"name="cari" placeholder="Cari Nama .."  value="{{ old('cari') }}">
		<input type="submit" value="CARI">
    </div>
    </div>
	</form>      
      </div>
      <br>
          <th></th>
          <th>Mahasiswa</th>
          <th></th>
      </tr>
      </thead>
      <tbody>
      <tr class = "font-weight-bolder">  
          <td>NIM</td>
          <td>Nama</td>
          <td>Option </td>
      </tr>
      @foreach($dtMhs as $m)
      <tr>
      <td>{{$m->nim}}</td>
      <td>{{$m->nama}}</td>
      <td>
      <form action="/mahasiswa/{{$m->id}}" method="post" class="d-inline">
    @method('delete')
    @csrf
    <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
      </form>
      <a href="/mahasiswa/{{$m->id}}" class="btn btn-info"><i class="fas fa-eye"></i></a>
      </td>
      </tr>
      @endforeach
      </tbody>  
    </table>
    {{$dtMhs->links()}}
</div>
</div>
</div>
@endsection