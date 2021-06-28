@extends('layouts.app2')
@section('title','Tambah Data')
@section('content')
<div class = "container">
<div class = "row">
<div class = "col-8">
<h1 class = "mt3"> Tambah Data</h1>
<form method ="post" action="/prodi">
@csrf
  <div class="form-group">
    <label for="prodi">Nama Program Studi : </label>
    <input type="text" class="form-control @error('nama')is-invalid @enderror" id="prodi" 
    placeholder="Masukan Nama Prodi..." name="prodi" value="{{old('prodi')}}">
    @error('prodi') <div class="invalid-feedback">{{$message}}</div> @enderror
  </div>
  <div class="form-group">
  <label for="prodi">Pilih Fakultas....</label>
  <select class="form-control" class="form-control @error('fakultas_id')is-invalid @enderror" 
  id="fakultas_id"  name="fakultas_id" value="{{old('fakultas_id')}}">
  @error('fakultas_id') <div class="invalid-feedback">{{$message}}</div> @enderror
  <option disabled value>Pilih Fakultas </option>
  @foreach($fk as $fk)
  <option value="{{$fk->id}}">{{$fk->fakultas}}</option>
  @endforeach
  </select> 
  </div>
  <div class="form-group">
    <label for="dekan">Ketua Prodi :</label>
    <input type="text" class="form-control @error('kepala_prod')is-invalid @enderror" id="kepala_prod" 
    placeholder="Masukan Ketua Prodi...." name="kepala_prod" value="{{old('kepala_prod')}}">
    @error('kepala_prod') <div class="invalid-feedback">{{$message}}</div> @enderror
  </div>
  <button type ="submit" class="btn btn-primary">Save</button>
</form>
</div>
@endsection