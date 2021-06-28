@extends('layouts.app2')
@section('title','Data Tenaga Pendidik')
@section('content')
<center>
<div class = "container-fluid text-center">
<div class = "row">
<div class = "col-12">
<h1 class = "mt3"> Data Tenaga Pendidik</h1>

<div class="card text-center">
@method('patch')
@csrf
<center>
<br>
<div style = "margin-top = 30px;">
  <img src="{{asset('img/'.$pendidik->foto) }}" height ="30%" width ="30%"  class="" alt="...">
  </div>
  </center>
  <div class="card-body">
    <h5>NIP : {{$pendidik->nip}}</h5>
    <h3 class="card-text"> Nama : {{$pendidik->nama}}</h3>
    <a href="{{$pendidik->id}}/edit" class="btn btn-primary">edit</a>
  </div>
</div>
</div>
</div>
</center>
@endsection