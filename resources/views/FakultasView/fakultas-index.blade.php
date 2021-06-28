@extends('layouts.app2')
@section('title','Fakultas')
<div style="background-image: url(image/2.jpg);">
@section('content')

<div class = "container ">
<div class="row justify-content-md-center">
<div class = "col-md-9">

    <br>
    <div class="box-body">
        <table class="table table-light">
      <thead class="thead-dark">
      <tr>
<div>
<div class  = "row">
	<form action="/fakultas" method="GET">
  <div class = "col-sm-8">
  <a href="/fakultas/create" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah</a>
        
  <a href="/fakultas/cetak" target="_blank" class="btn btn-success btn-sm"><i class="fas fa-print"></i>Cetak Data</a></h3>
  </div>
  <div class = "col-sm-4">       
		<input type="text" width = "40px;"name="cari" placeholder="Cari Fakultas .."  value="{{ old('cari') }}">
		<input type="submit" value="CARI">
    </div>
    </div>
	</form>

        </div>
        <!-- /.box-header -->
        <div class="box-body">
        <table class="table table-light">
      <thead class="thead-dark">
      <tr>
       
          <th></th>
          <th>Program Studi</th>
          <th></th>
      </tr>
      </thead>
      <tbody>
      <tr class = "font-weight-bolder">  
          <td>Fakultas</td>
          <td>Dekan</td>
          <td>Option </td>
      </tr>
      @foreach($dtFK as $fk)
      <tr>
      <td>{{$fk->fakultas}}</td>
      <td>{{$fk->dekan}}</td>
      <td>
      <form action="/fakultas/{{$fk->id}}" method="post" class="d-inline">
    @method('delete')
    @csrf
    <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
      </form>
      <a href="/fakultas/{{$fk->id}}" class="btn btn-info"><i class="fas fa-eye"></i></a>
      </td>
      </tr>
      @endforeach
      </tbody>  
    </table>
    {{$dtFK->links()}}
</div>
</div>
</div>
@endsection