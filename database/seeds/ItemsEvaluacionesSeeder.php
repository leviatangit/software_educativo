<?php

use Illuminate\Database\Seeder;

class ItemsEvaluacionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     
     DB::table('items_evaluacion')->insert([
     	'titulo' => '¿Que es Informatica?',
     	'default' => 1,
     	'id_modulo' => 1,
     	'tipo' => 'seleccion_simple'
     ]);

     DB::table('items_evaluacion')->insert([
     	'titulo' => 'Se entiende como software como:',
     	'default' => 1,
     	'id_modulo' => 1,
     	'tipo' => 'seleccion_simple'
     ]);

     DB::table('items_evaluacion')->insert([
     	'titulo' => 'Se entiende como hardware:',
     	'default' => 1,
     	'id_modulo' => 1,
     	'tipo' => 'seleccion_simple'
     ]);

     DB::table('items_evaluacion')->insert([
     	'titulo' => 'En informatica todo se rige los factores binarios de',
     	'default' => 1,
     	'id_modulo' => 1,
     	'tipo' => 'seleccion_simple'
     ]);

     DB::table('items_evaluacion')->insert([
     	'titulo' => 'Una de las funciones de la computadora es:',
     	'default' => 1,
     	'id_modulo' => 1,
     	'tipo' => 'seleccion_simple'
     ]);               
    }
}