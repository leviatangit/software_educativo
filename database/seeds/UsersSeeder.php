<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
    	// Admin
	 DB::table('users')->insert([
	  'nombre'     => 'admin',
	  'apellido' => 'admin',
	  'cedula' => '1000',
	  'email'    => 'gabrielc1990@poker.com',
	  'password' => bcrypt('1000'),
	  'status'  => 'activo',
	  'rol'  => 'director',
	]);
	 // Estudiante
	$estudiante = DB::table('users')->insert([
	  'nombre'     => 'Albarran',
	  'apellido' => 'Perez',
	  'cedula' => '2000',
	  'email'    => 'estudiante@gmail.com',
	  'password' => bcrypt('2000'),
	  'status'  => 'activo',
	  'rol'  => 'estudiante',
	]);


   }
}
