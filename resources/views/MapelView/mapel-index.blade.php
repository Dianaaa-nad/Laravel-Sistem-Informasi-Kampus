@extends('layouts.app2')
@section('title','Mata Kuliah')
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
	<form action="/matkul" method="GET">
  <div class = "col-sm-8">
  <a href="/matkul/create" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah</a>        
  <a href="/matkul/cetak" target="_blank" class="btn btn-success btn-sm"><i class="fas fa-print"></i>Cetak Data</a></h3>
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
          <th>Mata Kuliah</th>
          <th></th>
          <th></th>
      </tr>
      </thead>
      <tbody>
      <tr class = "font-weight-bolder">  
          <td>Mata Kuliah</td>
          <td>Jumlah SKS</td>
          <td>Semester</td>
          <td>Option </td>
      </tr>
      @foreach($Matkul as $p)
      <tr>
      <td>{{$p->nama_matkul}}</td>
      <td>{{$p->jumlah_sks}}</td>
      <td>{{$p->semester}}</td>
      <td>
      <form action="/matkul/{{$p->id}}" method="post" class="d-inline">
    @method('delete')
    @csrf
    <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
      </form>
      <a href ="matkul/{{$p->id}}/edit" class="btn btn-info"><i class="fas fa-edit"></i></a>
      </tr>
      @endforeach
      </tbody>  
    </table>
    {{$Matkul->links()}}
</div>
</div>
</div>
@endsection