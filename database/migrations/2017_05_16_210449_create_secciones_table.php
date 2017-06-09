<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeccionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('secciones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre')->required();            
            $table->integer('id_year')->unsigned();
            $table->foreign('id_year')->references('id')->on('year_academico')->onDelete('cascade');            
            $table->integer('id_profesor')->unsigned()->nullable();
            $table->foreign('id_profesor')->references('id')->on('users');             
            $table->float('promedio')->nullable();
            $table->boolean('registro_activo')->default(1);            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('secciones');
    }
}
