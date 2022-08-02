<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tipo_tattoo;

class tipo_tattooController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $campo = trim($request->get('valor'));

        $tattoo = tipo_tattoo::orderBy('tipo')
        ->where('tipo','like',"%$campo%")
        ->paginate(5);
        
        return view ('tipo_tattoo.index')->with('tattoos',$tattoo);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tipo_tattoo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(),
            [
                'tipo'=>'required'
            ]);

        $dato = new tipo_tattoo;

        $dato->id_tipo_tattoo=$request->get('id_tipo_tattoo');
        $dato->tipo=$request->get('tipo');
        $dato->save();

        return redirect()->route('tipo_tattoos.index')
        ->with('store','Guardado con éxito');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editar = tipo_tattoo::find($id);
        return view('tipo_tattoo.edit')->with('editar',$editar);
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
        $this->validate(request(),
            [
                'tipo'=>'required'
            ]);

        $actualizar = tipo_tattoo::find($id);
        $actualizar->tipo = $request->get('tipo');
        $actualizar->save();
         return redirect()->route('tipo_tattoos.index')
         ->with('store','Actualizado con éxito');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tattoo= tipo_tattoo::find($id)->delete();
        return redirect()->route('tipo_tattoos.index');
    }
}
