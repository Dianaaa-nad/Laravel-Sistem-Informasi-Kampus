@extends('layouts.app2')
@section('title','Edit')
@section('content')
<div class = "container">
<div class = "row">
<div class = "col-8">
<br>
<h1 class = "mt3"> Edit </h1>
<br>
<form method ="post" action="/jadwal/{{$jadwal->id}}">
    @method('patch')
    @csrf
    <div class="form-group">
  <label for="matkul">Pilih Mata Kuliah : </label>
  <select class="form-control" class="form-control @error('mata_pelajarans_id')is-invalid @enderror" 
  id="mata_pelajarans_id"  name="mata_pelajarans_id" value="{{$jadwal->mata_pelajarans_id}}">
  @error('mata_pelajarans_id') <div class="invalid-feedback">{{$message}}</div> @enderror
  <option disabled value>Pilih Program Studi : </option>
  @foreach($m as $m)
  <option value="{{$m->id}}">{{$m->nama_matkul}}</option>
  @endforeach
  </select> 

  <div class="form-group">
  <label for="pengajar">Pilih Pengajar : </label>
  <select class="form-control" class="form-control @error('pendidiks_id')is-invalid @enderror" 
  id="pendidiks_id"  name="pendidiks_id" value="{{$jadwal->pendidiks_id}}">
  @error('pendidiks_id') <div class="invalid-feedback">{{$message}}</div> @enderror
  <option disabled value>Pilih Pengajar : </option>
  @foreach($pd as $pd)
  <option value="{{$pd->id}}">{{$pd->nama}}</option>
  @endforeach
  </select> 

  <div class="form-group">
  <label for="kelas">Pilih Kelas : </label>
  <select class="form-control" class="form-control @error('kelas_id')is-invalid @enderror" 
  id="kelas_id"  name="kelas_id" value="{{$jadwal->kelas_id}}">
  @error('kelas_id') <div class="invalid-feedback">{{$message}}</div> @enderror
  <option disabled value>Pilih Kelas : </option>
  @foreach($k as $k)
  <option value="{{$k->id}}">{{$k->nama_kls}}</option>
  @endforeach
  </select> 

  <div class="form-group">
    <label for="jadwal">Jadwal : </label>
    <input type="text" class="form-control @error('jadwal')is-invalid @enderror" id="jadwal" 
    placeholder="Masukan Jadwal" name="jadwal" value="{{$jadwal->jadwal}}">
    @error('jadwal') <div class="invalid-feedback">{{$message}}</div> @enderror
  </div>

  </div>
  <div class="form-group">
    <label for="ruang">Ruang :</label>
    <input type="text" class="form-control @error('ruang')is-invalid @enderror" id="ruang" 
    placeholder="Masukan Ruang  : " name="ruang" value="{{$jadwal->ruang}}">
    @error('ruang') <div class="invalid-feedback">{{$message}}</div> @enderror
  <br>
    <button type ="submit" class="btn btn-primary">Save Changes</button>
</form>


</div>
</div>
</div>
@endsection