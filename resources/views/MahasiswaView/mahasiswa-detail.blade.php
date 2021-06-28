@extends('layouts.app2')
@section('title','Data Mahasiswa')
@section('content')
<center>
<div class = "container-fluid text-center">
<div class = "row">
<div class = "col-12">
<h1 class = "mt3"> Data Mahasiswa</h1>

<div class="card text-center">
@method('patch')
@csrf
<center>
<br>
<div style = "margin-top = 30px;">
  <img src="{{asset('img/'.$mahasiswa->foto) }}" height ="10%" width ="10%"  class="" alt="...">
  </div>
  </center>
  <div class="card-body">
    <h5>NIM : {{$mahasiswa->nim}}</h5>
    <h3 class="card-text">Nama :{{$mahasiswa->nama}}</h3>
    <a href="{{$mahasiswa->id}}/edit" class="btn btn-primary">edit</a>
  </div>
</div>
</div>
</div>
</center>
@endsection