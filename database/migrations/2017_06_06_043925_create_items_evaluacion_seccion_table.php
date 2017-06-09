<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsEvaluacionSeccionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items_evaluacion', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->boolean('default');            
            $table->integer('id_modulo')->unsigned();
            $table->foreign('id_modulo')->references('id')->on('modulos');  
            $table->enum('tipo',['seleccion_simple','multiple','desarrollo']);          
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
        Schema::dropIfExists('items_evaluacion');
    }
}
