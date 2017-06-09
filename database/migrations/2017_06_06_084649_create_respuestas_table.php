<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRespuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respuestas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_estudiante_evaluacion')->unsigned();
            $table->foreign('id_estudiante_evaluacion')->references('id')->on('estudiante_evaluacion');      
            $table->integer('id_item')->unsigned();
            $table->foreign('id_item')->references('id')->on('items_evaluacion');  
            $table->integer('id_opcion')->unsigned();
            $table->foreign('id_opcion')->references('id')->on('opciones');                          

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
        Schema::dropIfExists('respuestas');
    }
}
