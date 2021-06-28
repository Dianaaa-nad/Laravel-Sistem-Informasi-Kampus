@extends('layouts.app2')
@section('title','Tambah Mata Pelajaran')
@section('content')
<div class = "container">
<div class = "row">
<div class = "col-8">
<br>
<h1 class = "mt3"> Tambah Mapel</h1>
<br>
<form method ="post" action="/matkul">
@csrf
  <div class="form-group">
    <label for="nama_matkul">Nama Mata Kuliah : </label>
    <input type="text" class="form-control @error('nama')is-invalid @enderror" id="nama_matkul" 
    placeholder="Masukan Nama Mata Kuliah..." name="nama_matkul" value="{{old('nama_matkul')}}">
    @error('nama_matkul') <div class="invalid-feedback">{{$message}}</div> @enderror
  </div>
  <div class="form-group">
    <label for="sks">Jumlah SKS :</label>
    <input type="text" class="form-control @error('jumlah_sks')is-invalid @enderror" id="jumlah_sks" 
    placeholder="Masukan Jumlah SKS... " name="jumlah_sks" value="{{old('jumlah_sks')}}">
    @error('jumlah_sks') <div class="invalid-feedback">{{$message}}</div> @enderror
  </div>
  <div class="form-group">
    <label for="semester">Semester :</label>
    <input type="text" class="form-control @error('semester')is-invalid @enderror" id="semester" 
    placeholder="Masukan Semester.... " name="semester" value="{{old('semester')}}">
    @error('semester') <div class="invalid-feedback">{{$message}}</div> @enderror 
  </div>
  <button type ="submit" class="btn btn-primary">Save</button>
</form>
</div>
@endsection