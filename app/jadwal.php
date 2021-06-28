<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jadwal extends Model
{
    protected $table = "jadwals";
    protected $primaryKey = "id";
    protected $fillable = [
        "id", "mata_pelajarans_id", "pendidiks_id", "jadwal", "kelas_id", "ruang"];
}
