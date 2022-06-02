<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rawats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_pasien')->references('id')->on('pasiens');
            $table->foreignId('id_dokter')->references('id')->on('dokters');
            $table->foreignId('id_ruang')->references('id')->on('ruangs');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rawats');
    }
};
