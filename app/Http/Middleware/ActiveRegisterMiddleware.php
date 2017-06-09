<?php

namespace App\Http\Middleware;

use Closure;
use App\Configuracion;

class ActiveRegisterMiddleware
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
        if( Configuracion::find(1)->value == "false" ){
            redirect()->back();
        }

        return $next($request);
    }
}
