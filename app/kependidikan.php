<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kependidikan extends Model
{
    protected $table = "kependidikans";
    protected $primaryKey = "id";
    protected $fillable = [
        "id", "nip", "nama", "foto"];
    }