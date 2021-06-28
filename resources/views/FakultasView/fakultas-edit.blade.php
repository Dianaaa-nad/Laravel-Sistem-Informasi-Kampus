@extends('layouts.app2')
@section('title','Edit Fakultas')
@section('content')
<div class = "container">
<div class = "row">
<div class = "col-6">
<br>
<h1 class = "mt3"> Edit </h1>
<br>
<form method ="post" action="/fakultas/{{$fakultas->id}}">
    @method('patch')
    @csrf
    <div class="form-group">
        <label for="fakultas">Nama Fakultas : </label>
        <input type="text" class="form-control @error('fakultas')is-invalid @enderror" id="fakultas" 
        placeholder="Masukan Nama" name="fakultas" value="{{$fakultas->fakultas}}">
        @error('fakultas') <div class="invalid-feedback">{{$message}}</div> @enderror
    </div>

   
    <div class="form-group">
        <label for="dekan">Nama Dekan :</label>
        <input type="text" class="form-control @error('dekan')is-invalid @enderror" id="dekan" 
        placeholder="Masukan Nama dekan " name="dekan" value="{{$fakultas->dekan}}">
        @error('dekan') <div class="invalid-feedback">{{$message}}</div> @enderror
   </div>

    <button type ="submit" class="btn btn-primary">Save Changes</button>
</form>
</div>
</div>
</div>
@endsection