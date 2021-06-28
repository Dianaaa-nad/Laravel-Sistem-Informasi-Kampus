@extends('layouts.app2')
@section('title','Tambah Data')
@section('content')
<div class = "container">
<div class = "row">
<div class = "col-8">
<br>
<h1 class = "mt3">Tambah Data</h1>
<br>
<form method ="post" action="/mahasiswa" enctype="multipart/form-data" >
@csrf
  <div class="form-group">
    <label for="nim">NIM : </label>
    <input type="text" class="form-control @error('nim')is-invalid @enderror" id="nim" 
    placeholder="Masukan NIM" name="nim" value="{{old('nim')}}">
    @error('nim') <div class="invalid-feedback">{{$message}}</div> @enderror
  </div>
  <div class="form-group">
    <label for="nama">Nama : </label>
    <input type="text" class="form-control @error('nama')is-invalid @enderror" id="nama" 
    placeholder="Masukan Nama " name="nama" value="{{old('nama')}}">
    @error('nama') <div class="invalid-feedback">{{$message}}</div> @enderror
  </div>
  <div class="form-group">
    <label for="foto">Upload Foto :</label>
    <br>
    <input type="file" id="foto" name="foto" >
  </div>
  <button type ="submit" class="btn btn-primary">Save</button>
</form>
</div>
@endsection