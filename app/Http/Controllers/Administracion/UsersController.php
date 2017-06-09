<?php

namespace App\Http\Controllers\Administracion;

use Illuminate\Http\Request;
use App\User;
use App\Seccion;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

    public function store(Request $request)
    {


    $this->validate( $request , [
        'nombre' => 'required',
        'apellido' => 'required',
        'cedula' => 'required|integer|unique:users,cedula',            
        'email' => 'required|email|unique:users,email',            
        'password' => 'required|min:6|confirmed',
        'rol' => 'required',   
        'id_seccion' => 'required|integer',                       
    ]);

        //$request->set()
        $user = new User;
        $user->nombre = $request->input('nombre');
        $user->apellido = $request->input('apellido');
        $user->cedula = $request->input('cedula');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->rol = $request->input('rol');
        $user->save();        

        if( $user->rol == 'profesor' AND $request->input('id_seccion') ){            
            $seccion = Seccion::find( $request->input('id_seccion') );
            $seccion->id_profesor = $user->id;
            $seccion->save();
        }

        else{            
        }

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
        return view('administrador. users.show', ['user' => $user]);
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
