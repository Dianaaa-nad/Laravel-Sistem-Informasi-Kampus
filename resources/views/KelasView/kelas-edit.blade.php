@extends('layouts.app2')
@section('title','Main Menu')
@section('content')
<div class = "container">
<div class = "row">
<div class = "col-8">
<h1 class = "mt3"> Edit </h1>
<form method ="post" action="/kelas/{{$kelas->id}}">
    @method('patch')
    @csrf
    <div class="form-group">
        <label for="nama_kls">Nama Kelas : </label>
        <input type="text" class="form-control @error('nama_kls')is-invalid @enderror" id="nama_kls" 
        placeholder="Masukan Nama" name="nama_kls" value="{{$kelas->nama_kls}}">
        @error('nama_kls') <div class="invalid-feedback">{{$message}}</div> @enderror
    </div>
    <div class="form-group">
        <label for="prodi">Pilih Prodi : </label>
        <select class="form-control" class="form-control @error('prodis_id')is-invalid @enderror" 
            id="prodis_id"  name="prodis_id" value="{{$kelas->prodis_id}}">
            @error('prodis_id') <div class="invalid-feedback">{{$message}}</div> @enderror
            <option disabled value>Pilih Prodi </option>
            @foreach($pd as $pd)
            <option value="{{$pd->id}}">{{$pd->prodi}}</option>
            @endforeach
        </select> 
    </div>
    <div class="form-group">
        <label for="ruang_kelas">Ruang Kelas :</label>
        <input type="text" class="form-control @error('ruang_kelas')is-invalid @enderror" id="ruang_kelas" 
        placeholder="Masukan Ruang Kelas " name="ruang_kelas" value="{{$kelas->ruang_kelas}}">
        @error('ruang_kelas') <div class="invalid-feedback">{{$message}}</div> @enderror
   </div>
    <button type ="submit" class="btn btn-primary">Save Changes</button>
</form>
</div>
</div>
</div>
@endsection