<?php

use Illuminate\Database\Seeder;

class ModulosSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    // Modulos
        DB::table('modulos')->insert([
        	'nombre' => 'Principios Basicos de la computaciòn',
        	'descripcion' => '',
        	'id_imagen' => 1,        	
        ]);

        DB::table('modulos')->insert([
        	'nombre' => 'Bios, Buses, Disco Duro, S.O, Memoria ROM, Memoria RAM ',
        	'descripcion' => '',
        	'id_imagen' => 2,        	
        ]);

        DB::table('modulos')->insert([
        	'nombre' => 'Procesador, Unidad Aritmetico-Logico',
        	'descripcion' => '',
        	'id_imagen' => 3,        	
        ]);

        DB::table('modulos')->insert([
        	'nombre' => 'Tarjeta Grafica, Fuente de Poder, Mantenimiento Preventido, Memoria Ram',
        	'descripcion' => '',
        	'id_imagen' => 4,        	
        ]);


        DB::table('modulos')->insert([
        	'nombre' => 'Movimiento Preventivo y Correctivo',
        	'descripcion' => '',
        	'id_imagen' => 5,        	
        ]);

        DB::table('modulos')->insert([
        	'nombre' => 'Logica',
        	'descripcion' => '',
        	'id_imagen' => 6,        	
        ]);
    }
}
