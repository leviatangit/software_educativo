<?php

namespace App\Http\Middleware;

use Closure;

class DirectorMiddleware
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
        if( $request->user()->rol != 'director' ){

            $notificacion = ['tipo' => 'warning' , 'header' => 'Acceso denegado', 'text' => 'No puede acceder a esta area'];
            return redirect()->route('home');
        }

        return $next($request);
    }
}
