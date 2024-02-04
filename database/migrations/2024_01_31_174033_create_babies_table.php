<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBabiesTable extends Migration
{
    public function up()
    {
        Schema::create('babies', function (Blueprint $table) {
            $table->id();
            $table->string('nama_bayi');
            $table->string('jenis_kelamin');
            $table->string('berat_badan');
            $table->string('jenis_imunisasi');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('babies');
    }
}
