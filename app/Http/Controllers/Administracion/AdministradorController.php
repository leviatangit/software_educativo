<?php

namespace App\Http\Controllers\Administracion;

use Illuminate\Http\Request;
use App\Year;


class AdministradorController extends Controller
{
    public function index()
    {    	    	
    	return view('administrador.dashboard');
    }    


}
