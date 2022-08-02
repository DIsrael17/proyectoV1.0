<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\tipo_tattoo;
use App\Videos;

class crudVideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        $datos = Videos::all();
        //var_dump($datos);
       return view('config.video')
        ->with('datos',$datos);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $video=tipo_tattoo::all();
        return view('videos.crear')
        ->with('video',$video);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(),[
            'direccion_url'=>'required',
            'fecha_publicacion'=>'required',
            'fecha_expiracion'=>'required',
            'tipo_de_tattoo'=>'required'
        ]);


        $dato = new Videos;


        $dato->id_video=$request->get('id_video');
        $dato->nombre=$request->get('nombre');

        // Se extrae el ID 
        $URL=$request->get('direccion_url');
        $cutURL = substr($URL, 32);
        $dato->direccion_url = $cutURL;

        $dato->descripcion=$request->get('descripcion');
        $dato->fecha_publicacion=$request->get('fecha_publicacion');
        $dato->fecha_expiracion=$request->get('fecha_expiracion');
        $dato->id_tipo_tattoo=$request->get('tipo_de_tattoo');
        $dato->save();

        return redirect()->route('videos.index')
        ->with('store','la noticia se guardo correctamente')
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

        $dato=Videos::find($id);
        $video=tipo_tattoo::all();

        //return $dato;
        return view('videos.modificar')
        ->with('modificar',$dato)
        ->with('video',$video);
        
        
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
                'direccion_url'=>'required',
                'fecha_publicacion'=>'required',
                'fecha_expiracion'=>'required',
                'tipo_de_tattoo'=>'required'
            ]);

        $dato = Videos::find($id);

        $dato->id_video=$request->get('id_video');
        $dato->nombre=$request->get('nombre');
        $dato->direccion_url=$request->get('direccion_url');
        $dato->descripcion=$request->get('descripcion');
        $dato->fecha_publicacion=$request->get('fecha_publicacion');
        $dato->fecha_expiracion=$request->get('fecha_expiracion');
        $dato->id_tipo_tattoo=$request->get('tipo_de_tattoo');

        $dato->save();
        return redirect()->route('videos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $dato = Videos::find($id)->delete();
        return redirect()->route('videos.index');
    }
}
