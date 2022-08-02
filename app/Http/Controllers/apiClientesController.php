<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\clientes;

class apiClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        return clientes::all();
           
        /*return clientes::select('clientes.folio',
            'clientes.nombre',
            'clientes.apellidop',
            'clientes.apellidom',
            'clientes.numero_tel',
            'clientes.correo',
            'clientes.pais', 
            'clientes.estado',
            'clientes.localidad',
            'clientes.comentario');*/
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $cliente = new clientes;
        $cliente->folio=$request->get('folio');
        $cliente->nombre=$request->get('nombre');
        $cliente->apellidop=$request->get('apellidop');
        $cliente->apellidom=$request->get('apellidom');
        $cliente->numero_tel=$request->get('numero_tel');
        $cliente->correo=$request->get('correo');
        $cliente->pais=$request->get('pais');
        $cliente->estado=$request->get('estado');
        $cliente->localidad=$request->get('localidad');
        $cliente->comentario=$request->get('comentario'); 

        $cliente->save();
        return $cliente;


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return clientes::find($id); 

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $cliente = clientes::find($id);
        $cliente->folio=$request->get('folio');
        $cliente->nombre=$request->get('nombre');
        $cliente->apellidop=$request->get('apellidop');
        $cliente->apellidom=$request->get('apellidom');
        $cliente->numero_tel=$request->get('numero_tel');
        $cliente->correo=$request->get('correo');
        $cliente->pais=$request->get('pais');
        $cliente->estado=$request->get('estado');
        $cliente->localidad=$request->get('localidad');
        $cliente->comentario=$request->get('comentario'); 

        $cliente->save();
        return $cliente;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        return clientes::destroy($id);
    }
}
