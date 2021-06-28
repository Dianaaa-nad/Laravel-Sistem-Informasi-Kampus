@extends('layouts.app2')
@section('title','Tambah Data')
@section('content')
<div class = "container">
<div class = "row">
<div class = "col-6">
<br>
<h1 class = "mt3"> Tambah Data</h1>
<br>
<form method ="post" action="/fakultas">
@csrf
  <div class="form-group">
    <label for="fakultas">Nama Fakultas : </label>
    <input type="text" class="form-control @error('nama')is-invalid @enderror" id="fakultas" 
    placeholder="Masukan Nama Fakultas :" name="fakultas" value="{{old('fakultas')}}">
    @error('fakultas') <div class="invalid-feedback">{{$message}}</div> @enderror
  </div>


  
  <div class="form-group">
    <label for="dekan">Dekan :</label>
    <input type="text" class="form-control @error('dekan')is-invalid @enderror" id="dekan" 
    placeholder="Masukan Nama Dekan : " name="dekan" value="{{old('dekan')}}">
    @error('dekan') <div class="invalid-feedback">{{$message}}</div> @enderror
  
  </div>

  <button type ="submit" class="btn btn-primary">Save</button>
</form>
</div>
@endsection