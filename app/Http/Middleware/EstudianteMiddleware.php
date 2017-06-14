<?php

namespace App\Http\Middleware;

use Closure;

class EstudianteMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if( $request->user()->rol =! 'estudiante' ){

            $notificacion = ['tipo' => 'warning' , 'header' => 'Acceso denegado', 'text' => 'Los estudiantes no puede acceder a la area de estudiantes'];
            session()->flash('notificacion',$notificacion);
            return redirect()->back();
        }         
        return $next($request);
    }
}
