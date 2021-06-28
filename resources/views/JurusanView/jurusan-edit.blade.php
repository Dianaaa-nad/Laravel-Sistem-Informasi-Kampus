@extends('layouts.app2')
@section('title','edit')
@section('content')
<div class = "container">
<div class = "row">
<div class = "col-8">
<h1 class = "mt3"> Edit </h1>
<form method ="post" action="/prodi/{{$prodi->id}}">
    @method('patch')
    @csrf
    <div class="form-group">
        <label for="prodi">Nama Program Studi : </label>
        <input type="text" class="form-control @error('prodi')is-invalid @enderror" id="prodi" 
        placeholder="Masukan Nama Prodi..." name="prodi" value="{{$prodi->prodi}}">
        @error('prodi') <div class="invalid-feedback">{{$message}}</div> @enderror
    </div>
    <div class="form-group">
        <label for="prodi">Pilih Fakultas....</label>
        <select class="form-control" class="form-control @error('fakultas_id')is-invalid @enderror" 
            id="fakultas_id"  name="fakultas_id" value="{{$prodi->fakultas_id}}">
            @error('fakultas_id') <div class="invalid-feedback">{{$message}}</div> @enderror
            <option disabled value>Pilih Fakultas </option>
            @foreach($fk as $fk)
            <option value="{{$fk->id}}">{{$fk->fakultas}}</option>
            @endforeach
        </select> 
    </div>
    <div class="form-group">
        <label for="kepala_prod">Nama Kepala Prodi :</label>
        <input type="text" class="form-control @error('kepala_prod')is-invalid @enderror" id="kepala_prod" 
        placeholder="Masukan Kepala prodi... " name="kepala_prod" value="{{$prodi->kepala_prod}}">
        @error('kepala_prod') <div class="invalid-feedback">{{$message}}</div> @enderror
   </div>
    <button type ="submit" class="btn btn-primary">Save Changes</button>
</form>
</div>
</div>
</div>
@endsection