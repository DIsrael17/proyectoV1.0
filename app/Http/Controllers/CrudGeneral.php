<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\ConfiguraNoticia;
use App\CrudNoticia;
use DB;
use App\mCategoria;

class CrudGeneral extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        $datos = ConfiguraNoticia::orderBy('id_noticia','asc')//conexion a la base datos y a la tabla
        ->get();
        //var_dump($datos);
       return view('config.noticia')
        ->with('datos',$datos);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias=mCategoria::all();
        return view('noticias.crear')
        ->with('categorias',$categorias);

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
                'descripcion'=>'required',
                'titulo'=>'required',
                'fecha_publicacion'=>'required',
                'fecha_expiracion'=>'required',
                'categoria'=>'required'
            ]);

        $dato = new ConfiguraNoticia;


        $dato->descripcion=$request->get('descripcion');
        $dato->titulo=$request->get('titulo');
        $dato->subtitulo=$request->get('subtitulo');
        $dato->publicado=$request->get('publicado');
        $dato->fecha_publicacion=$request->get('fecha_publicacion');
        $dato->fecha_expiracion=$request->get('fecha_expiracion');
        $dato->id_categoria=$request->get('categoria');
        
        //return $dato;

        $dato->save();

        return redirect()->route('noot.index')
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

        $dato=ConfiguraNoticia::find($id);

        $categorias=DB::table('categorias')->get();
        //return $categorias;
        return view('noticias.modificar') 
        ->with('modificar',$dato)
        ->with('categorias',$categorias);
        
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
                'descripcion'=>'required',
                'titulo'=>'required',
                'fecha_publicacion'=>'required',
                'fecha_expiracion'=>'required',
                'categoria'=>'required'
            ]);


        $dato = ConfiguraNoticia::find($id);;

        //$dato->id_noticia=$request->get('id_noticia');
        $dato->descripcion=$request->get('descripcion');
        $dato->titulo=$request->get('titulo');
        $dato->subtitulo=$request->get('subtitulo');
        $dato->publicado=$request->get('publicado');
        $dato->fecha_publicacion=$request->get('fecha_publicacion');
        $dato->fecha_expiracion=$request->get('fecha_expiracion');
        $dato->id_categoria=$request->get('categoria');

        $dato->save();
        return redirect()->route('noot.index')
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

        $dato = ConfiguraNoticia::find($id)->delete();
        return redirect()->route('noot.index');
    }
}
