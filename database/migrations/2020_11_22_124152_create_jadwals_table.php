<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJadwalsTable extends Migration
{
    
    public function up()
    {
        Schema::create('jadwals', function (Blueprint $table) {
            $table->id();
            $table->biginteger('mata_pelajarans_id');
            $table->biginteger('pendidiks_id');
            $table->biginteger('kelas_id');
            $table->string('jadwal');
            $table->string('ruang');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('jadwals');
    }
}
