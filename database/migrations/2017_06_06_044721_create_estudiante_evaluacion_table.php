<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstudianteEvaluacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiante_evaluacion', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_evaluacion_modulo')->unsigned();
            $table->foreign('id_evaluacion_modulo')->references('id')->on('evaluacion_modulo'); 
            $table->integer('id_estudiante')->unsigned();
            $table->foreign('id_estudiante')->references('id')->on('estudiantes');                         
            $table->float('nota');
            $table->integer('cant_correctas');
            $table->integer('cant_incorrectas');
            $table->enum('status',['aprobado','suspendido']);

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
        Schema::dropIfExists('estudiante_evaluacion');
    }
}
