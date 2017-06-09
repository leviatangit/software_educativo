<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvaluacionItemsSeccionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluacion_items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_evaluacion_modulo')->unsigned();
            $table->foreign('id_evaluacion_modulo')->references('id')->on('evaluacion_modulo');  
            $table->integer('id_item_evaluacion')->unsigned();
            $table->foreign('id_item_evaluacion')->references('id')->on('items_evaluacion');                          
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
        Schema::dropIfExists('evaluacion_items');
    }
}
