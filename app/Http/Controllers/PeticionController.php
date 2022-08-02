<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Peticion;
use App\clientes;
class PeticionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)  
    {
        $valor=trim($request->get('valor'));

        $peticion=peticion::orderBy('id_peticion','DESC')
        ->where('id_peticion','LIKE',"%$valor%")
        ->orWhere('folio','LIKE',"%$valor%")
        ->paginate(5);

        return view('peticion.index')
        ->with('peticiones',$peticion); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $peticiones = clientes::all();

        return view('peticion.create') 
        -> with('peticiones',$peticiones);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         // $this->validate($request,['descripcion'=>'required','aceptado'=>'required','folio'=>'required']);
        //Automovil::create($request->all());
        $this->validate(request(), 
            [
            'descripcion' => 'required',
            'Usuario' => 'required'
            ]);

        $guardar=new peticion;
        // $guardar->id_peticion=$request->get('id_peticion');
        $guardar->descripcion=$request->get('descripcion');
        $guardar->folio=$request->get('Usuario');
        $guardar->save();
        return redirect()->route('peticiones.index')
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
        $editar=peticion::find($id);
        return view('Peticion.edit')->with('editar',$editar);
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
            'descripcion' => 'required'
            ]);
        
        $actualizar=peticion::find($id);//->update($request->all());;
        // find=busca 
        //localisamos el auto que se ba a evian.
        // $actualisar->id_peticion=$request->get('id_peticion');
        //request: lo que el for manda en un vector
        //get:obtenemos
        // $actualisar->id_peticion=$request->get('id_peticion');
        $actualizar->descripcion=$request->get('descripcion');
        // $actualisar->folio=$request->get('folio');
        $actualizar->save();
        //save:guarda los datos proporcionados.
        

         return redirect()->route('peticiones.index')
         ->with('store','Actualizado con éxito');
         //redireccionamos una ves guardada los datos
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $elimina=peticion::find($id)->delete();
        return redirect()->route('peticiones.index');
    }
}
