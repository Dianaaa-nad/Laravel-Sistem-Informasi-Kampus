@extends('layouts.app2')
@section('title','Detail Fakultas')
@section('content')
<div class = "container-fluid text-center">
<div class = "row">
<div class = "col-12">
<br>
<h1 class = "mt3"> Fakultas Details</h1>
<br>

<div class="card" >
@method('patch')
@csrf
  <div class="card-body">
    <h3>{{$fakultas->fakultas}}</h3>
    <h6 class="card-subtitle mb-2 text-muted">Dekan : {{$fakultas->dekan}}</h6>
    <a href ="{{$fakultas->id}}/edit"class="btn btn-primary">Edit</a>

    <br>
    <br>
    <a href="/fakultas" class="card-link text-center">Kembali</a>
  </div>
</div>
</div>
@endsection