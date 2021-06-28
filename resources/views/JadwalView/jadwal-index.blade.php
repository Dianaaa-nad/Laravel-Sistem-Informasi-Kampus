@extends('layouts.app2')
@section('title','Jadwal Perkuliahan')
<div style="background-image: url(image/2.jpg);">
@section('content')
<div class = "container ">
<div class="row justify-content-md-center">
<div class = "col-md-9">
    <div class="box">
        <div class="box-header">
           </div>
        <br>
        <div class="box-body">
        <table class="table table-light">
      <thead class="thead-dark">
      <tr>
<div>
<div class  = "row">
	<form action="/jadwal" method="GET">
  <div class = "col-sm-8">
  <a href="/jadwal/create" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah</a>
        
  <a href="/jadwal/cetak" target="_blank" class="btn btn-success btn-sm"><i class="fas fa-print"></i>Cetak Data</a></h3>
  </div>
  <div class = "col-sm-4">       
		<input type="text" width = "40px;"name="cari" placeholder="Cari Mata Kuliah .."  value="{{ old('cari') }}">
		<input type="submit" value="CARI">
    </div>
    </div>
	</form>     
      </div></form>
      <br>
          <th></th>
          <th></th>
          <th>Daftar jadwal</th>
          <th></th>
          <th></th>
          <th></th>
      </tr>
      </thead>
      <tbody>
      <tr class = "font-weight-bolder">  
          <td>Mata Kuliah</td>
          <td>Pengajar</td>
          <td>Kelas </td>
          <td>Jadwal </td>
          <td>Ruang </td>
          <td>Option </td>
      </tr>
      @foreach($dt as $d)
      <tr>
      <td>{{$d->nama_matkul}}</td>
      <td>{{$d->nama}}</td>
      <td>{{$d->nama_kls}}</td>
      <td>{{$d->jadwal}}</td>
      <td>{{$d->ruang}}</td>
      <td>
      <form action="/jadwal/{{$d->id}}" method="post" class="d-inline">
    @method('delete')
    @csrf
    <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
      </form>
      <a href ="jadwal/{{$d->id}}/edit" class="btn btn-info"><i class="fas fa-edit"></i></a>
      </td>
      </tr>
      @endforeach
      </tbody>  
    </table>
    {{$dt->links()}}
</div>
</div>
</div>
@endsection