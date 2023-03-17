<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pasien_id')->constrained();
            $table->string('keluhan');
            $table->foreignId('dokter_id')->constrained();
            $table->string('diagnosa');
            $table->foreignId('obat_id')->constrained();
            $table->foreignId('ruang_id')->constrained();
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
        Schema::dropIfExists('medis');
    }
}
