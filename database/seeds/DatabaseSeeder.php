<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersSeeder::class);
        $this->call(ConfigsSeeders::class);
        $this->call(ImagenesSeeders::class);        
        $this->call(ModulosSeeders::class);
        $this->call(ComponentesSeeders::class);
        $this->call(TemasSeeders::class);
        $this->call(JuegosSeeders::class);
        $this->call(ItemsEvaluacionesSeeder::class);
        $this->call(OpcionesSeeder::class);
        
    }
}
