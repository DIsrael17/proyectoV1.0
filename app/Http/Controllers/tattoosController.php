<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;//para poder hacer una redireccion se tiene que usar esto

use App\tattoos;
use App\tipo_tattoo; 

class tattoosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $campo = trim($request->get('valor'));
        $tattoo =tattoos::orderBy('nombre','ASC')
        ->where('nombre','like',"%$campo%")
        ->paginate(2);
        //view/nombreCarpeta/archivo.blade.php 
        return view('tattoos.index')
        ->with('tattoos',$tattoo);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipo = tipo_tattoo::all();
        return view('tattoos.create')
        ->with('tattoos',$tipo);
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
                'tipo_de_tattoo'=>'required',
                'nombre'=>'required',
                'descripcion'=>'required',
                'imagen'=>'required'
            ]
        );


        $tattoos = new tattoos;

        $tattoos->id_tipo_tattoo=$request->get('tipo_de_tattoo');
        $tattoos->nombre=$request->get('nombre');
        $tattoos->descripcion=$request->get('descripcion');

        $archivo = $request ->file('imagen');
        $name = $request->id_tattoo; 
        if ($archivo!=null) 
        {
              $archivo->move(public_path().'/img/tattoos/',$name.'.jpg');
              $tattoos->imagen = $name.'.jpg';  
        }       

        $tattoos->save();

        return redirect()->route('tattoos.index')
        ->with('store','Gurdado con éxito');
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
        $tattoo=tattoos::find($id);
        $tipo=tipo_tattoo::all();

        return view('tattoos.edit')
        ->with('tattoos',$tattoo)
        ->with('tipos',$tipo);
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
                'nombre'=>'required',
                'descripcion'=>'required',
                'imagen'=>'required'
            ]
        );

        $dato=tattoos::find($id);
        
        $dato->id_tipo_tattoo=$request->get('tipo_de_tattoo');
        $dato->nombre = $request -> get('nombre');
        $dato->descripcion = $request -> get('descripcion');

        $archivo = $request->file('imagen');
        if ($archivo!=null) //si la variable tiene algun dato se ejecuta las instrucciones dentro del if
        //si es falso pues la variable no tiene valores dentro de ella
        {
           $archivo->move(public_path().'/img/tattoos/',$id.'.jpg'); 
           $dato->imagen = $id.'.jpg';
        }
        $dato->save();

        return redirect()->route('tattoos.index')
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
        $dato = tattoos:: find($id)->delete();

        return redirect()->route('tattoos.index');
    }
}
