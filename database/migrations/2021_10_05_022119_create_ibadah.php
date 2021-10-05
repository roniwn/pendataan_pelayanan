<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIbadah extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ibadah', function (Blueprint $table) {
        
            $table->bigIncrements('id');
            $table->integer('kode');
            $table->string('kecamatan');
            $table->integer('tahun');
            $table->integer('masjid');
            $table->integer('musholla');
            $table->integer('gereja_protestant');
            $table->integer('gereja_katholik');
            $table->integer('pura');
            $table->integer('vihara');
            $table->integer('jumlah');
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
        Schema::dropIfExists('ibadah');
    }
}
