<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fakultas extends Model
{
    protected $table = "fakultas";
    protected $primaryKey = "id";
    protected $fillable = [
        "id", "fakultas", "dekan"];
    
    public function prodis()
    {
        return $this->hasManyThrough(
        'App\Prodi', 
        'App\Kelas', 
      
);
    }
}
