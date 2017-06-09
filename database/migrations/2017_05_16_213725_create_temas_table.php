<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTemasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',100);
            $table->text('contenido');
            $table->integer('id_modulo')->unsigned();
            $table->foreign('id_modulo')->references('id')->on('modulos');         
        });
    }    

    public function down()
    {
        Schema::dropIfExists('temas');
    }
}
