<?php

namespace App\Http\Middleware;

use Closure;

class AreaAdministrativaMiddleware
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
        if( $request->user()->rol == 'estudiante' ){

            $notificacion = ['tipo' => 'warning' , 'header' => 'Acceso denegado', 'text' => 'No tiene la permisologia para acceder a esta area'];
            session()->flash('notificacion',$notificacion);
            return redirect()->back();
        }        
        return $next($request);
    }
}
