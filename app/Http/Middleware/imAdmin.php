<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Redirect;
use Closure;
use Session;

class imAdmin
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
        $llave = Session::get('acceso');
        if (empty($llave)) 
    
        return Redirect::to('login');
    
        
        return $next($request);
    }
}
