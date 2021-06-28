<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table = "kelas";
    protected $primaryKey = "id";
    protected $fillable = [
        "id", "nama_kls", "prodis_id", "ruang_kelas"];

}
