<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecordsSeccionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('records_seccion', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_juego')->unsigned();
            $table->foreign('id_juego')->references('id')->on('juegos');   
            $table->integer('id_seccion')->unsigned();
            $table->foreign('id_seccion')->references('id')->on('secciones');   
            $table->integer('id_record')->unsigned();
            $table->foreign('id_record')->references('id')->on('records');                                       
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
        Schema::dropIfExists('records_seccion');
    }
}
