<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre', 'apellido', 'cedula', 'email', 'password', 'rol', 'status' 
    ];

    public $timestamps = false;


    public function estudiante(){
        return $this->hasOne( Estudiante::class, 'id_user', 'id' );
    }

    public function isR( $rol ){
        return $this->rol == $rol;
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function fullName(  $cedula = false ){

        return $cedula ? $this->nombre . ' ' . $this->apellido . ' ' . $this->cedula : $this->nombre . ' ' . $this->apellido;       
    }

}
