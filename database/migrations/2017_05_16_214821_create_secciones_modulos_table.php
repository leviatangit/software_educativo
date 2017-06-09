<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeccionesModulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('secciones_modulos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_modulo')->unsigned();
            $table->foreign('id_modulo')->references('id')->on('modulos');  
            $table->integer('id_seccion')->unsigned();
            $table->foreign('id_seccion')->references('id')->on('secciones');    
            $table->boolean('evaluacion_activa')->default(0);
            $table->float('ponderacion')->nullable();                 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('secciones_modulos');
    }
}
