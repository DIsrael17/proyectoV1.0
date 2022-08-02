<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ConfigurarPagina; //conectado a la tabla
use session;
use App\Carousel;
class ConfigPageController extends Controller
{
    public function Mostrar()
    {
    	 $carousel = Carousel::all();

    	 $dato = ConfigurarPagina::get();

         return view ('index')->with('datos',$dato)->with('carousels',$carousel);


    }
}
