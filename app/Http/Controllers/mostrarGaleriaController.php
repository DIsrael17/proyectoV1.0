<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imagenes;
use App\ConfigurarPagina;

class mostrarGaleriaController extends Controller
{
    public function Mostrar()
    {
       $pictures = Imagenes::all();
       $dato = ConfigurarPagina::all();

        return view('indice.galeria')->with('imagenes',$pictures)->with('datos',$dato);
    }
}
