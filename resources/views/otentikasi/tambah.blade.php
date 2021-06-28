@extends('layouts.app2')
@section('title','Main Menu')
@section('content')
<div class = "container">
<div class = "row">
<div class = "col-6">
<h1 class = "mt3"> Add Admin</h1>

<form method ="post" action="/tambah">
@csrf
  <div class="form-group">
    <label for="name">Nama : </label>
    <input type="text" class="form-control @error('name')is-invalid @enderror" id="name" 
    placeholder="Masukan Nama :" name="name" value="{{old('name')}}">
    @error('name') <div class="invalid-feedback">{{$message}}</div> @enderror
  </div>


  
  <div class="form-group">
    <label for="email">Email :</label>
    <input type="text" class="form-control @error('email')is-invalid @enderror" id="email" 
    placeholder="Masukan Email : " name="email" value="{{old('email')}}">
    @error('email') <div class="invalid-feedback">{{$message}}</div> @enderror
  
  </div>

  <div class="form-group">
    <label for="password">Password :</label>
    <input type="password" class="form-control @error('password')is-invalid @enderror" id="password" 
    placeholder="Masukan Password : " name="password" value="{{old('password')}}">
    @error('password') <div class="invalid-feedback">{{$message}}</div> @enderror
  
  </div>

  <button type ="submit" class="btn btn-primary">Save</button>
</form>
</div>
@endsection