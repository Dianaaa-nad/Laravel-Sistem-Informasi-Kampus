@extends('layouts.app2')
@section('title','Data Tenaga Pendidik')
@section('content')
<center>
<div class = "container-fluid text-center">
<div class = "row">
<div class = "col-8">
<h1 class = "mt3"> Data Tenaga Kependidikan</h1>

<div class="card text-center">
@method('patch')
@csrf
<center>
<br>
<div style = "margin-top = 30px;">
  <img src="{{asset('img/'.$kependidikan->foto) }}" height ="30%" width ="30%"  class="" alt="...">
  </div>
  </center>
  <div class="card-body">
    <h5>NIP : {{$kependidikan->nip}}</h5>
    <h3 class="card-text">Nama : {{$kependidikan->nama}}</h3>
    <a href="{{$kependidikan->id}}/edit" class="btn btn-primary">edit</a>
  </div>
</div>
</div>
</div>
</center>
@endsection