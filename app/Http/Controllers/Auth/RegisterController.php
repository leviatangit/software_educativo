<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Estudiante;
use App\Http\Controllers\Administracion\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = '/home';

    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'cedula' => 'required|integer|unique:users,cedula',
            'nombre' => 'required|string',
            'apellido' => 'required|string',            
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            'id_seccion' => 'required|integer',

        ]);
    }

    protected function create(array $data)
    {

    $user =  User::create([
        'cedula' => $data['cedula'],
        'nombre' => $data['nombre'],
        'apellido' => $data['apellido'],            
        'email' => $data['email'],
        'password' => bcrypt($data['password']),
    ]);

    Estudiante::create(['id_user' => $user->id, 'id_seccion' => $data['id_seccion'] ]);

    return $user;
    }
}
