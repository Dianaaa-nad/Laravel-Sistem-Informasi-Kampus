@extends('layouts.app2')
@section('title','Edit Mata Pelajaran')
@section('content')
<div class = "container">
<div class = "row">
<div class = "col-8">
<br>
<h1 class = "mt3"> Edit Mapel</h1>
<br>
<form method ="post" action="/matkul/{{$matkul->id}}">
    @method('patch')
    @csrf
    <div class="form-group">
        <label for="nama_matkul">Nama Mapel : </label>
        <input type="text" class="form-control @error('nama_matkul')is-invalid @enderror" id="nama_matkul" 
        placeholder="Masukan Nama Mata Kuliah..." name="nama_matkul" value="{{$matkul->nama_matkul}}">
        @error('nama_matkul') <div class="invalid-feedback">{{$message}}</div> @enderror
    </div>
    <div class="form-group">
        <label for="semester">Semester :</label>
        <input type="text" class="form-control @error('semester')is-invalid @enderror" id="semester" 
        placeholder="Masukan Semester... " name="semester" value="{{$matkul->semester}}">
        @error('semester') <div class="invalid-feedback">{{$message}}</div> @enderror
   </div>
   <div class="form-group">
        <label for="semester">Jumlah_sks :</label>
        <input type="text" class="form-control @error('jumlah_sks')is-invalid @enderror" id="jumlah_sks" 
        placeholder="Masukan jumlah sks... " name="jumlah_sks" value="{{$matkul->jumlah_sks}}">
        @error('jumlah_sks') <div class="invalid-feedback">{{$message}}</div> @enderror
   </div>
    <button type ="submit" class="btn btn-primary">Save Changes</button>
</form>


</div>
</div>
</div>
@endsection