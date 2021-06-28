@extends('layouts.app2')
@section('title','Detail')
@section('content')
<div class = "container-fluid text-center">
<div class = "row">
<div class = "col-8">
<h1 class = "mt3"> Detail</h1>

<div class="card" >
@method('patch')
@csrf
  <div class="card-body">
    <h3>{{$prodi->prodi}}</h3>
    <h6 class="card-subtitle mb-2 text-muted">{{$prodi->fakultas->fakultas}}</h6>
    <p class="card-text">Kepala Prodi : {{$prodi->kepala_prod}}</p>
    <a href ="{{$prodi->id}}/edit"class="btn btn-primary">Edit</a>
    <br>
    <br>
    
  </div>
</div>
</div>
@endsection