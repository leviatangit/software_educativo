<?php

use Illuminate\Database\Seeder;

class JuegosSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('juegos')->insert(['nombre' => 'Juego #1' , 'id_imagen' => 26 ]);
        DB::table('juegos')->insert(['nombre' => 'Juego #2' , 'id_imagen' => 27 ]);
        DB::table('juegos')->insert(['nombre' => 'Juego #3' , 'id_imagen' => 28 ]);
    }
}
