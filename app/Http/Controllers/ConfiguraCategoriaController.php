<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Categorias;
use DB;

class ConfiguraCategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        $datos = DB::table('categorias')//conexion a la base datos y a la tabla
        ->get();
        //var_dump($datos);
       return view('config.categoria')
        ->with('datos',$datos);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crudcat.crear');
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
                'nombre'=>'required'
            ]);

        $dato = new Categorias;

        // $dato->id_categoria=$request->get('id_categoria');
        $dato->nombre=$request->get('nombre');
        

        $dato->save();

        return redirect()->route('cat.index')
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

        $dato=Categorias::find($id);

        
        //return $categorias;
        return view('crudcat.modificar')
        ->with('modificar',$dato);
        
        
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
                'nombre'=>'required'
            ]);


        $dato = Categorias::find($id);

        $dato->nombre=$request->get('nombre');

        $dato->save();
        return redirect()->route('cat.index')->
        with('store','Actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $dato = Categorias::find($id)->delete();
        return redirect()->route('cat.index');
    }
}
