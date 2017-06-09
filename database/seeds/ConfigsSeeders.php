<?php

use Illuminate\Database\Seeder;

class ConfigsSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	 DB::table('configs')->insert(
        [ 'setting'    => 'registro_activo', 'value' => 'false' ],
        [ 'setting'    => 'x', 'value' => 'y' ]
    );	 

    }
}
