<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pendidik extends Model
{
    //
    protected $table = "pendidiks";
    protected $primaryKey = "id";
    protected $fillable = [
        "id", "nip", "nama", "foto"];
}
