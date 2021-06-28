@extends('layouts.app2')
@section('title','Main Menu')
<div style="background-image: url(image/2.jpg);">
@section('content')

<div class = "container ">
<div class="row justify-content-md-center">
<div class = "col-md-9">
<!-- <a href="/students/create" class="btn btn-primary my-3"> Tambah data</a>
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif -->

    <div class="box">
        <div class="box-header">
          <h3 class="box-title"><a href="/adm/tambah" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah</a></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
        <table class="table table-light">
      <thead class="thead-dark">
      <tr>
       
          <th></th>
          <th>Daftar Admin</th>
          <th></th>
      </tr>
      </thead>
      <tbody>
      <tr class = "font-weight-bolder">  
     
          <td>No</td>
          <td>Nama</td>
          <td>Email </td>
      </tr>
      @foreach($da as $a)
      <tr>
      <td>{{ $loop->iteration }}</td>
          <td>{{$a->name}}</td>
          <td>{{$a->email}} </td>
          </tr>
          @endforeach
      </tbody>  
    </table>
</div>
</div>
</div>
<!-- <div class="card-body">
  <div class="card-body table-responsive p-0">
    <table class="table table-hover text-nowrap">
      <thead>
      <tr>
          <th> Code </th>
          <th> Code </th>
          <th> Code </th>
      </tr>
      </thead>
      <tbody>
      <tr>  
          <td>001</td>
          <td>001</td>
          <td>001</td>
      </tr>
      </tbody>  
    </table>
  </div>
</div> -->
<!-- 
<table class="table table-light">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table> -->
@endsection