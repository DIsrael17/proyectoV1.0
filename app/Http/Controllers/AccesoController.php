<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Administrador;
use Session;
use Cache;
use Illuminate\Support\Facades\Redirect;//para poder hacer una redireccion se tiene que usar esto
class AccesoController extends Controller
{
    public function validar(Request $request)
    {
    	$user=$request->get('user');
    	$password=$request->get('password');

    	$acceso=Administrador::where('curp','=',$user)
    	->where('contrasenia','=',$password)
    	->first();

         
         // var_dump($acceso,$user,$password);
    	if (!empty($acceso)) 
    	{
    		
    		Session::put('acceso',$acceso);
          
    		return Redirect()->route('config.index');

    	   	    	   		

    	}else
    	{
    		return Redirect::to('login');
    	}
    }


    public function salir()
    {
        Session::flush();
        Session::reflash();
        Cache::flush();//varcia la cache
        unset($_SESSION);//vaciar toda la sesión

        return Redirect::to('home');
    }
}
