<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Juego extends Model
{
    protected $table = 'juegos';
    protected $fillable = ['nombre','img_nombre'];

    public function imagen(){    	
    	return $this->belongsTo( Imagen::class, 'id_imagen', 'id' );
    }

}
