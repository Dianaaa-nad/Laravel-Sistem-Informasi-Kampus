<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matkul extends Model
{
    protected $table = "mata_pelajarans";
    protected $primaryKey = "id";
    protected $fillable = [
        "id", "nama_matkul", "jumlah_sks", "semester"];
}
