@extends('layouts.app2')
@section('title','Main Menu')
<div style="background-image: url(image/2.jpg);">
@section('content')

<div class = "container ">
<div class="row justify-content-md-center">
<div class = "col-md-9">
   <br>
        <!-- /.box-header -->
        <br>
        <div class="box-body">
        <table class="table table-light">
      <thead class="thead-dark">
      <tr>
<div>
<div class  = "row">
	<form action="/prodi" method="GET">
  <div class = "col-sm-8">
  <a href="/prodi/create" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah</a>
        
  <a href="/prodi/cetak" target="_blank" class="btn btn-success btn-sm"><i class="fas fa-print"></i>Cetak Data</a></h3>
  </div>
  <div class = "col-sm-4">       
		<input type="text" width = "40px;"name="cari" placeholder="Cari Prodi .."  value="{{ old('cari') }}">
		<input type="submit" value="CARI">
    </div>
    </div>
	</form>   
      </div>
      <br>
      </div>
          <th></th>
          <th>Program Studi</th>
          <th></th>
      </tr>
      </thead>
      <tbody>
      <tr class = "font-weight-bolder">  
          <td>Program Studi</td>
          <td>Fakultas</td>
          <td>Option </td>
      </tr>
      @foreach($dtProdi as $p)
      <tr>
      <td>{{$p->prodi}}</td>
      <td>{{$p->fakultas->fakultas}}</td>
      <td>
      <form action="/prodi/{{$p->id}}" method="post" class="d-inline">
    @method('delete')
    @csrf
    <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
      </form>
      <a href="/prodi/{{$p->id}}" class="btn btn-info"><i class="fas fa-eye"></i></a>
      </td>
      </tr>
      @endforeach
      </tbody>  
    </table>
    {{$dtProdi->links()}}
</div>
</div>
</div>
@endsection