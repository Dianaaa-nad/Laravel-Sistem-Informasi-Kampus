@extends('layouts.app2')
@section('title','Edit')
@section('content')
<div class = "container">
<div class = "row">
<div class = "col-8">
<br>
<h1 class = "mt3"> Edit </h1>
<br>
<form method ="post" action="/kependidikan/{{$kependidikan->id}}" enctype="multipart/form-data">
@method('patch')
@csrf
  <div class="form-group">
    <label for="nip">NIP : </label>
    <input type="text" class="form-control @error('nip')is-invalid @enderror" id="nip" 
    placeholder="Masukan NIP" name="nip" value="{{$kependidikan->nip}}">
    @error('nip') <div class="invalid-feedback">{{$message}}</div> @enderror
  </div>
  <div class="form-group">
    <label for="nama">Nama : </label>
    <input type="text" class="form-control @error('nama')is-invalid @enderror" id="nama" 
    placeholder="Masukan Nama " name="nama" value="{{$kependidikan->nama}}">
    @error('nama') <div class="invalid-feedback">{{$message}}</div> @enderror
  </div>
  <div class="form-group">
    <label for="foto">Upload Foto :</label>
    <br>
    <input type="file" id="foto" name="foto" value="{{$kependidikan->foto}}">
    <br>
  </div>
  <button type ="submit" class="btn btn-primary">Save</button>
</form>
</div>
</div>
</div>
@endsection