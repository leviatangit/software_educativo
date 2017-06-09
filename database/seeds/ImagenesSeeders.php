<?php

use Illuminate\Database\Seeder;

class ImagenesSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    // Modulos
	 DB::table('imagenes')->insert(  [ 'nombre' => 'book_1.png' ]);	 // 1
     DB::table('imagenes')->insert(  [ 'nombre' => 'book_2.png' ]);  // 2
     DB::table('imagenes')->insert(  [ 'nombre' => 'book_3.png' ]);  // 3
     DB::table('imagenes')->insert(  [ 'nombre' => 'book_4.png' ]);  // 4
     DB::table('imagenes')->insert(  [ 'nombre' => 'book_5.png' ]);  // 5
     DB::table('imagenes')->insert(  [ 'nombre' => 'book_6.png' ]);  // 6
     
    // Componentes
     DB::table('imagenes')->insert(  [ 'nombre' => 'motherboard.png' ]);  // 6
     DB::table('imagenes')->insert(  [ 'nombre' => 'memory-rom.png' ]);  // 7
     DB::table('imagenes')->insert(  [ 'nombre' => 'ram-memory.png' ]);  // 8
     DB::table('imagenes')->insert(  [ 'nombre' => 'fuente_poder.png' ]);  // 9
     DB::table('imagenes')->insert(  [ 'nombre' => 'hard-disk.png' ]);  // 10
     DB::table('imagenes')->insert(  [ 'nombre' => 'compact-disc.png' ]);  // 11
     DB::table('imagenes')->insert(  [ 'nombre' => 'cpu.png' ]);  // 12
     DB::table('imagenes')->insert(  [ 'nombre' => 'gpu.png' ]);  // 13
     DB::table('imagenes')->insert(  [ 'nombre' => 'cooler.png' ]);  // 14
     DB::table('imagenes')->insert(  [ 'nombre' => 'audio-card.png' ]);  // 15
     DB::table('imagenes')->insert(  [ 'nombre' => 'caja.png' ]);  // 16
     DB::table('imagenes')->insert(  [ 'nombre' => 'pila.png' ]);  // 17
     DB::table('imagenes')->insert(  [ 'nombre' => 'usb-port.png' ]);  // 18
     DB::table('imagenes')->insert(  [ 'nombre' => 'puerto-paralelo.png' ]);  // 19
     DB::table('imagenes')->insert(  [ 'nombre' => 'disipador.png' ]);  // 20
     DB::table('imagenes')->insert(  [ 'nombre' => 'puertos.png' ]);  // 21
     DB::table('imagenes')->insert(  [ 'nombre' => 'ide.png' ]);  // 22
     DB::table('imagenes')->insert(  [ 'nombre' => 'perifericos.png' ]);  // 23
     DB::table('imagenes')->insert(  [ 'nombre' => 'norte.png' ]);  // 24
     DB::table('imagenes')->insert(  [ 'nombre' => 'sur.png' ]);  // 25

     // Juegos
     DB::table('imagenes')->insert(  [ 'nombre' => 'gamepad.png' ]);  // 26
     DB::table('imagenes')->insert(  [ 'nombre' => 'gamepad.png' ]);  // 27
     DB::table('imagenes')->insert(  [ 'nombre' => 'gamepad.png' ]);  // 28


    }
}


