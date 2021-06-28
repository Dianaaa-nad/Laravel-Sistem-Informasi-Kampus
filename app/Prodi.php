<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    protected $table = "prodis";
    protected $primaryKey = "id";
    protected $fillable = [
        "id", "prodi", "fakultas_id", "kepala_prod"];
    
    public function fakultas()
    {
        return $this->belongsTo(Fakultas::class);
    }


}
