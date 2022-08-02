<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ConfiguraNoticia;
use App\ConfigurarPagina;
use Illuminate\Support\Facades\Redirect;//para poder hacer una redireccion se tiene que usar esto

class mostrarNoticiaController extends Controller
{
    public function Noticia()
    {
    	$dato = ConfigurarPagina::all();
    	$noticia = ConfiguraNoticia::all();
    	 return view('indice.historia')->with('datos',$dato)->with('noticias',$noticia);
    }
}
