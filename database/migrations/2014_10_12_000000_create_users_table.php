<?php
//dad66d_y3
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{

    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 45)->required();
            $table->string('apellido', 45)->required();            
            $table->integer('cedula')->unique()->required();            
            $table->string('email')->unique()->required();
            $table->string('password' , 80);
            $table->enum('rol' , ['estudiante','profesor','director']);
            $table->enum('status',['activo','inactivo'])->default('activo');            
            $table->rememberToken();
        });
    }
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
