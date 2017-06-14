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
        DB::table('componentes')->insert(['nombre'  => 'Tarjeta Madre' , 'contenido' => '<div class="definicion"><span class="title-c titulo_concepto">Definiciòn</span> La tarjeta madre, placa base o motherboard es una tarjeta de circuito impreso que permite la integración de todos los componentes de una computadora. Para esto, cuenta con un software básico conocido como BIOS, que le permite cumplir con sus funciones.</div> <div class="mantenimiento"> <span class="title-c titulo_mantenimiento">Mantenimiento preventivo y correctivo</span> <p>
Libérela de los tomillos que la sujetan al gabinete. Se debe Tener Mucho cuidado con las arandelas aislantes que tienen los tomillos, ya que éstas se pierden muy fáciles. Observe con detenimiento el sentido que tienen los conectores de alimentación de la tarjeta principal, ya que si estos se invierten, se pueden dañar sus componentes electrónicos.</p> <p>Con elementos sencillos como una brocha, se puede hacer la limpieza general de las tarjetas principal y de interfaz, al igual que en el interior de la unidad. Para limpiar los contactos de las tarjetas de interfaz se utiliza un borrador blando para lápiz. Después de retirar el polvo de las tarjetas y limpiar los terminales de cobre de dichas tarjetas, podemos aplicar limpia-contados (dispositivo en aerosol para mejorar la limpieza y que tiene gran capacidad dieléctrica) a todas las ranuras de expansión y en especial a los conectores de alimentación de la tarjeta principal. </p> </div> ', 'id_imagen' => 7 ]);

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
