<?php

use Illuminate\Database\Seeder;

class TemasSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// MODULO 1
    	
	 DB::table('temas')->insert([
	   'nombre' => 'Informatica',
	   'contenido' => "<div class='titulo_seccion'>Informática</div><p>Se refiere al procesamiento automático de información mediante dispositivos electrónicos y sistemas computacionales. Los sistemas informáticos deben contar con la capacidad de cumplir tres tareas básicas: entrada (captación de la información), procesamiento y salida (transmisión de los resultados). El conjunto de estas tres tareas se conoce como algoritmo.</p><p>La informática reúne a muchas de las técnicas que el hombre ha desarrollado con el objetivo de potenciar sus capacidades de pensamiento, memoria y comunicación. Su área de aplicación no tiene límites: la informática se utiliza en la gestión de negocios, en el almacenamiento de información, en el control de procesos, en las comunicaciones, en los transportes, en la medicina y en muchos otros sectores.</p>",
	   'id_modulo' => 1
	   ]);

      DB::table('temas')->insert([
        'nombre' => 'Hardware',
        'contenido' => "<div class='titulo_seccion'>Hardware</div><p>Se define al hardware como el conjunto de los componentes que conforman la parte material (física) de una computadora, a diferencia del software que refiere a los componentes lógicos (intangibles). Sin embargo, el concepto suele ser entendido de manera más amplia y se utiliza para denominar a todos los componentes físicos de una tecnología.</p><p>En el caso de la informática y de las computadoras personales, el hardware permite definir no sólo a los componentes físicos internos (disco duro, placa madre, microprocesador, circuitos, cables, etc.), sino también a los periféricos (escáners, impresoras).</p>",
        'id_modulo' => 1
        ]);

      DB::table('temas')->insert([
        'nombre' => 'Medidas de Software',
        'contenido' => "<div class='titulo_seccion'>Cual Sistema Operativo es Gratuito</div><strong class='subtitulo_seccion'>Software Propietario</strong><p>Software no libre, software privativo, software privado, software con propietario o software de propiedad. Se refiere a cualquier programa informático en el que los usuarios tienen limitadas las posibilidades de usarlo,  modificarlo o redistribuirlo  con o sin modificaciones, o cuyo código fuente no está disponible o el acceso a éste se encuentra restringido.</p><strong>Caracteristicas</strong><ul><li>	Este software no te pertenece no puedes hacerle ningún tipo de modificación al código fuente.</li><li>No puedes distribuirlo sin el permiso del propietario.</li><li>El usuario debe realizar cursos para el manejo del sistema como tal debido a su alta capacidad de uso.</li><li>Cualquier ayuda en cuanto a los antivirus.</li></ul>",
        'id_modulo' => 1
        ]);

      DB::table('temas')->insert([
        'nombre' => 'Enseñanzas',
        'contenido' => "<div class='titulo_seccion'>Enseñanzas</div><strong class='subtitulo_seccion'>Encender una computadora</strong>
<ol><li>Enciende el monitor oprimiendo el botón de encendido o power. La ubicación del botón depende del fabricante, se puede encontrar en la parte delantera o trasera de la pantalla. </li><li>Se enciende el CPU. </li><li>inicio </li></ol><hr>	<strong class='subtitulo_seccion'>Apagar una computadora</strong><ol><li>Se presiona el botón inicio, depende del sistema operativo que use.<li>Seleccionar apagar el computador</li><li>Apagar el monitor</li><li>Por último el CPU que termina apagándose en conjunto.</li></ol><p>Software no libre, software privativo, software privado, software con propietario o software de propiedad. Se refiere a cualquier programa informático en el que los usuarios tienen limitadas las posibilidades de usarlo,  modificarlo o redistribuirlo  con o sin modificaciones, o cuyo código fuente no está disponible o el acceso a éste se encuentra restringido.</p><strong>Caracteristicas</strong><ul><li>Este software no te pertenece no puedes hacerle ningún tipo de modificación al código fuente.</li><li>	No puedes distribuirlo sin el permiso del propietario.</li>	<li>El usuario debe realizar cursos para el manejo del sistema como tal debido a su alta capacidad de uso.</li><li>Cualquier ayuda en cuanto a los antivirus.</li></ul>	<strong class='subtitulo_seccion'>Una de las funciones principales de mi PC es</strong>	<p>La PC hace tres funciones importantes: 1 Entrada de datos, es la información que utilizará la computadora, el cual entra a través del teclado, mouse, puertos, etc. 2 El procesamiento de los datos, la máquina procesa los datos conforme le haya sido indicado por el usuario con el fin deseado. 3 Resultados, la máquina arrojará los resultados el cual es información concreta procesada conforme se pidió.</p><strong class='subtitulo_seccion'>Un Driver o un Controlador</strong><p>Un controlador de dispositivo o manejador de dispositivo (en inglés: device driver, o simplemente driver) es un programa informático que permite al sistema operativo interaccionar con un periférico, haciendo una abstracción del hardware y proporcionando una interfaz (posiblemente estandarizada) para utilizar el dispositivo. Es una pieza esencial del software, y en particular, del núcleo de un sistema operativo, sin la cual el hardware sería inutilizable</p><strong class='subtitulo_seccion'>Un gigabyte es la unidad de medida de información equivalente</strong><p>Un gigabyte es una unidad de almacenamiento de información cuyo símbolo es el GB, equivalente a 109 (1.000.000.000 mil millones de bytes). El término giga proviene del griego ????? /guígas/ que significa (gigante). En lengua coloquial, (gigabyte) se abrevia a menudo como giga: 'Esta computadora tiene 2 gigas de RAM'.</p>",
        'id_modulo' => 1
        ]);

    	// MODULO 2











      
	}
}
