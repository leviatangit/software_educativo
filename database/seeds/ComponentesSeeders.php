<?php

use Illuminate\Database\Seeder;

class ComponentesSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('componentes')->insert(['nombre'  => 'Tarjeta Madre' , 'contenido' => '', 'id_imagen' => 7 ]);
        DB::table('componentes')->insert(['nombre'  => 'Memoria Rom' , 'contenido' => '', 'id_imagen' => 8 ]);
        DB::table('componentes')->insert(['nombre'  => 'Memoria Ram' , 'contenido' => '', 'id_imagen' => 9 ]);
        DB::table('componentes')->insert(['nombre'  => 'Fuente de Poder' , 'contenido' => '', 'id_imagen' => 10 ]);
        DB::table('componentes')->insert(['nombre'  => 'Disco Duro' , 'contenido' => '', 'id_imagen' => 11 ]);
        DB::table('componentes')->insert(['nombre'  => 'Unidad Optica' , 'contenido' => '', 'id_imagen' => 12 ]);
        DB::table('componentes')->insert(['nombre'  => 'Prosocesador' , 'contenido' => '', 'id_imagen' => 13 ]);
        DB::table('componentes')->insert(['nombre'  => 'Tarjeta Grafica' , 'contenido' => '', 'id_imagen' => 14 ]);
        DB::table('componentes')->insert(['nombre'  => 'Cpu Cooler' , 'contenido' => '', 'id_imagen' => 15 ]);
        DB::table('componentes')->insert(['nombre'  => 'Tarjeta de Audio' , 'contenido' => '', 'id_imagen' => 16 ]);
        DB::table('componentes')->insert(['nombre'  => 'Gabiente' , 'contenido' => '', 'id_imagen' => 17 ]);
        DB::table('componentes')->insert(['nombre'  => 'Pila' , 'contenido' => '', 'id_imagen' => 18 ]);
        DB::table('componentes')->insert(['nombre'  => 'Puerto USB' , 'contenido' => '', 'id_imagen' => 19]);
        DB::table('componentes')->insert(['nombre'  => 'Puertos Paralelos' , 'contenido' => '', 'id_imagen' => 20 ]);
        DB::table('componentes')->insert(['nombre'  => 'Disipador' , 'contenido' => '', 'id_imagen' => 21 ]);
        DB::table('componentes')->insert(['nombre'  => 'Puertos Externos' , 'contenido' => '', 'id_imagen' => 22 ]);
        DB::table('componentes')->insert(['nombre'  => 'Conector Cable IDE' , 'contenido' => '', 'id_imagen' => 23 ]);
        DB::table('componentes')->insert(['nombre'  => 'Componentes Perifericos' , 'contenido' => '', 'id_imagen' => 24 ]);
        DB::table('componentes')->insert(['nombre'  => 'Chipset Puerto Norte' , 'contenido' => '', 'id_imagen' => 25 ]);
        DB::table('componentes')->insert(['nombre'  => 'Chipset Puerto Sur' , 'contenido' => '', 'id_imagen' => 26 ]);
    }
}
