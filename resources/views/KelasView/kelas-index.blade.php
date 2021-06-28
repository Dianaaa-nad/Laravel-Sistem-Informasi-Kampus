@extends('layouts.app2')
@section('title','Data Kelas')
<div style="background-image: url(image/2.jpg);">
@section('content')
<div class = "container ">
<div class="row justify-content-md-center">
<div class = "col-md-9">
<br>
    <div class="box">
        <div class="box-header">
          </div>
        <div class="box-body">
        <table class="table table-light">
      <thead class="thead-dark">
      <tr>
      <div>
<div class  = "row">
	<form action="/kelas" method="GET">
  <div class = "col-sm-8">
  <a href="/kelas/create" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah</a>      
  <a href="/kelas/cetak" target="_blank" class="btn btn-success btn-sm"><i class="fas fa-print"></i>Cetak Data</a></h3>
  </div>
  <div class = "col-sm-4">       
		<input type="text" width = "40px;"name="cari" placeholder="Cari Nama Kelas .."  value="{{ old('cari') }}">
		<input type="submit" value="CARI">
    </div>
    </div>
    <br>
	</form>
          <th></th>
          <th>Daftar kelas</th>
          <th></th>
          <th></th>
      </tr>
      </thead>
      <tbody>
      <tr class = "font-weight-bolder">  
          <td>Kelas</td>
          <td>Jurusan</td>
          <td>Ruang Kelas </td>
          <td>Option </td>
      </tr>
      @foreach($dtKelas as $k)
      <tr>
      <td>{{$k->nama_kls}}</td>
      <td>{{$k->prodi}}</td>
      <td>{{$k->ruang_kelas}}</td>
      <td>
      <form action="/kelas/{{$k->id}}" method="post" class="d-inline">
    @method('delete')
    @csrf
    <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
      </form>
      <a href ="kelas/{{$k->id}}/edit" class="btn btn-info"><i class="fas fa-edit"></i></a>
      </td>
      </tr>
      @endforeach
      </tbody>  
    </table>
    {{$dtKelas->links()}}
</div>
</div>
</div>
@endsection