<?php

use Illuminate\Database\Seeder;

class OpcionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// ---------- MODULO 1 ------------------ // 

    		// PREGUNTA 1 
        DB::table('opciones')->insert([
        	'id_item_evaluacion' => 1,
        	'nombre' => 'La ciencia que investiga componentes electricos',
        	'verd_fals' => false
        ]);

        DB::table('opciones')->insert([
        	'id_item_evaluacion' => 1,
        	'nombre' => 'Un sistema informatica basado en algoritmos',
        	'verd_fals' => false
        ]);

        DB::table('opciones')->insert([
        	'id_item_evaluacion' => 1,
        	'nombre' => 'Se refiere al procesamiento automático de información mediante dispositivos electrónicos y sistemas computacionale',
        	'verd_fals' => true
        ]);

        DB::table('opciones')->insert([
        	'id_item_evaluacion' => 1,
        	'nombre' => 'Una fuente de energia alternativa',
        	'verd_fals' => false
        ]);    

    		// PREGUNTA 2  SOFTWARE
        DB::table('opciones')->insert([
        	'id_item_evaluacion' => 2,
        	'nombre' => 'Conjunto de los componentes que conforman la parte material (física) de una computadora',
        	'verd_fals' => false
        ]);

        DB::table('opciones')->insert([
        	'id_item_evaluacion' => 2,
        	'nombre' => 'Componentes logicos intangibles usados en una computadora para su funcionamiento',
        	'verd_fals' => false
        ]);

        DB::table('opciones')->insert([
        	'id_item_evaluacion' => 2,
        	'nombre' => 'Manual de instrucciones para la instalaciòn de un computador',
        	'verd_fals' => true
        ]);

        DB::table('opciones')->insert([
        	'id_item_evaluacion' => 2,
        	'nombre' => 'Periferico de salida donde se muestran las imagenes y que permite la interaciòn del usuario con la computadora',
        	'verd_fals' => false
        ]); 


    		// PREGUNTA 3 HARDWARE
        DB::table('opciones')->insert([
        	'id_item_evaluacion' => 3,
        	'nombre' => 'Conjunto de los componentes que conforman la parte material (física) de una computadora',
        	'verd_fals' => true
        ]);

        DB::table('opciones')->insert([
        	'id_item_evaluacion' => 3,
        	'nombre' => 'Componentes logicos intangibles usados en una computadora',
        	'verd_fals' => false
        ]);

        DB::table('opciones')->insert([
        	'id_item_evaluacion' => 3,
        	'nombre' => 'Sistema utilizado para la regulaciòn de energia en un computador',
        	'verd_fals' => true
        ]);

        DB::table('opciones')->insert([
        	'id_item_evaluacion' => 3,
        	'nombre' => 'Lenguaje de programaciòn orientado a objetivos',
        	'verd_fals' => false
        ]);  

    		// PREGUNTA 4 BINARIOS
        DB::table('opciones')->insert([
        	'id_item_evaluacion' => 4,
        	'nombre' => '0 y 1',
        	'verd_fals' => true
        ]);

        DB::table('opciones')->insert([
        	'id_item_evaluacion' => 4,
        	'nombre' => '1 y 2',
        	'verd_fals' => false
        ]);

        DB::table('opciones')->insert([
        	'id_item_evaluacion' => 4,
        	'nombre' => '10 y 100',
        	'verd_fals' => false
        ]);

        DB::table('opciones')->insert([
        	'id_item_evaluacion' => 4,
        	'nombre' => '2000 y 2018',
        	'verd_fals' => false
        ]);  


    		// PREGUNTA 5 HARDWARE
        DB::table('opciones')->insert([
        	'id_item_evaluacion' => 5,
        	'nombre' => 'Recibir informaciòn y procesarla para su posterior utilizaciòn',
        	'verd_fals' => true
        ]);

        DB::table('opciones')->insert([
        	'id_item_evaluacion' => 5,
        	'nombre' => 'Cocinar y preparar platillos',
        	'verd_fals' => false
        ]);

        DB::table('opciones')->insert([
        	'id_item_evaluacion' => 5,
        	'nombre' => '--------',
        	'verd_fals' => false
        ]);

        DB::table('opciones')->insert([
        	'id_item_evaluacion' => 5,
        	'nombre' => '------',
        	'verd_fals' => false
        ]);  







    	// ---------- MODULO 1 ------------------ // 
    	// ---------- MODULO 2 ------------------ // 
    	// ---------- MODULO 3 ------------------ // 
    	// ---------- MODULO 4 ------------------ // 



    }
}

/*

            $table->increments('id');
            $table->integer('id_item_evaluacion')->unsigned();
            $table->foreign('id_item_evaluacion')->references('id')->on('items_evaluacion');  
            $table->string('nombre');
            $table->boolean('verd_fals');  
   */