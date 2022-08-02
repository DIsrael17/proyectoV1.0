<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Videos;
use App\ConfigurarPagina;

class mostrarVideoController extends Controller
{
    public function Mostrar()
    {
    	$film = Videos::all();
        $datos = ConfigurarPagina::all();

     	return view('indice.videos')->with('datos',$datos)->with('videos',$film); 
    }
}
