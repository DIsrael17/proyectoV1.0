<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\clientes;

class ObtenerFolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dato = clientes::all();
       $folio = $dato->last();
       
        return  $folio->folio + 1;
    }
}