<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvaluacionModuloTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluacion_modulo', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_seccion_modulo')->unsigned();
            $table->foreign('id_seccion_modulo')->references('id')->on('secciones_modulos');  
            $table->integer('nota')->required();
            $table->enum('status',['finalizada','activa'])->required();            
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
        Schema::dropIfExists('evaluacion_modulo');
    }
}
