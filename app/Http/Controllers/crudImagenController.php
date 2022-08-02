<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Imagenes;
use DB;

class crudImagenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        $datos = imagenes::orderBy('archivo','asc')
        ->paginate(4);
        //var_dump($datos);
       return view('config.imagen')
        ->with('datos',$datos);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('imagenes.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this-> validate(request(),[
            'nombre'=>'required',
            'imagen'=>'required'
        ]);

        $dato = new Imagenes;
        
        $dato->id_imagen=$request->get('id_imagen');
        $dato->nombre=$request->get('nombre');
       
        $documento=$request->file('imagen');
        $name = time();
        
        if ($documento!=null)
        {
            $documento->move(public_path().'/img/imagenes/',$name.'.jpg');
            $dato->archivo  = $name.'.jpg';
        }

        
        $dato->descripcion=$request->get('descripcion');
        

        $dato->save();



        return redirect()->route('image.index')
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

        $dato=Imagenes::find($id);

        
        //return $dato;
        return view('imagenes.modificar')
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
        $this-> validate(request(),[
            'nombre'=>'required',
            'imagen'=>'required'
        ]);


        $dato = Imagenes::find($id);

         $documento=$request->file('imagen');
        //si no se encuentra la imagen 
        if ($documento!=null)
        {
            $documento->move(public_path().'/img/imagenes/',$id.'.jpg');
            $dato->archivo=$id.'.jpg';
        }


        $dato->id_imagen=$request->get('id_imagen');
        $dato->nombre=$request->get('nombre');
        $dato->descripcion=$request->get('descripcion');

        $dato->save();
        return redirect()->route('image.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $dato = Imagenes::find($id)->delete();
        return redirect()->route('image.index');
    }
}
