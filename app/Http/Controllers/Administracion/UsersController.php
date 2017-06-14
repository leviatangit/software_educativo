<?php

namespace App\Http\Controllers\Administracion;

use Illuminate\Http\Request;
use App\User;
use App\Seccion;
use App\Estudiante;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

        return view('administrador.users.index', ['users' => $users ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create( $rol = false )
    {
        return view('administrador.users.create', ['rol' => $rol ]);
    }



    public function store_estudiante(Request $request){

    $this->validate( $request , [
        'nombre' => 'required|alpha',
        'apellido' => 'required|alpha',
        'cedula' => 'required|integer|unique:users,cedula',            
        'email' => 'required|email|unique:users,email',            
        'password' => 'required|min:6|confirmed',
    ]);

        $user = new User;
        $user->nombre = $request->input('nombre');
        $user->apellido = $request->input('apellido');
        $user->cedula = $request->input('cedula');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->rol = 'estudiante';
        $user->save();        

        $estudiante = new Estudiante;
        $estudiante->id_user = $user->id;            
        $estudiante->id_seccion = (int) $request->input('id_seccion');
        $estudiante->save();        

        $notificacion = ['tipo' => 'success' , 'header' => 'Registro exitoso', 'text' => 'Se ha registrado exitosamente al estudiante en la secciòn' ];

        session()->flash( 'notificacion', $notificacion );
        return redirect()->back();
    }



    public function store(Request $request)
    {
    $this->validate( $request , [
        'nombre' => 'required|alpha',
        'apellido' => 'required|alpha',
        'cedula' => 'required|integer|unique:users,cedula',            
        'email' => 'required|email|unique:users,email',            
        'password' => 'required|min:6|confirmed',
        'rol' => 'required',   
    ]);

        $user = new User;
        $user->nombre = $request->input('nombre');
        $user->apellido = $request->input('apellido');
        $user->cedula = $request->input('cedula');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->rol = $request->input('rol');
        $user->save();        

        if( $user->rol == 'profesor' AND $request->input('id_seccion') == true ){            
            $seccion = Seccion::find( $request->input('id_seccion') );
            $seccion->id_profesor = $user->id;
            $seccion->save();
        }

        else if( $user->rol == 'estudiante' AND $request->input('id_seccion') == true ) {            
            $estudiante = new Estudiante;
            $estudiante->id_user = $user->id;            
            $estudiante->id_seccion = (int) $request->input('id_seccion');
            $estudiante->save();
        }

        $notificacion = ['tipo' => 'success' , 'header' => 'Registro exitoso', 'text' => 'Se ha efectuado exitosamente el registro del ' . $user->rol .  ' ' . $user->fullName()];

        session()->flash( 'notificacion', $notificacion );
        return redirect('dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrfail($id);
        $view = "";

        if( $user->rol == 'estudiante' ){
            return view('administrador.users.show_estudiante', ['user' => $user]);
        }

        elseif( $user->rol == 'profesor' ){
            return view('administrador.users.show_profesor', ['user' => $user]);
        }

        else {
            return view('administrador.users.show_director', ['user' => $user]);
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
