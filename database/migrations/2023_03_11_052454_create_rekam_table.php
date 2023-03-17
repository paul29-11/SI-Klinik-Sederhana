<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRekamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rekam', function (Blueprint $table) {
            $table->id();
            $table->foreign('pasien_id');
            $table->string('keluhan');
            $table->foreign('dokter_id');
            $table->string('diagnosa');
            $table->foreign('obat_id');
            $table->foreign('ruang_id');
            $table->timestamps();
            $table->unique(array('id'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rekam');
    }
}
