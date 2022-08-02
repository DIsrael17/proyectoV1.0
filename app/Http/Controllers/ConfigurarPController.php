<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\ConfigurarPagina; //conectado a la tabla CP
use Cache;

class ConfigurarPController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        $configuraciones= ConfigurarPagina::all();

          

        return view('config.index')
        ->with('configuraciones', $configuraciones);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $config=ConfigurarPagina::find($id);

        return view('config.config')->with('config',$config);
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
        $configuracion=ConfigurarPagina::find($id);
        // $configuracion->id_config=$request->get('id_config');

        $logo=$request->file('logo');
        if ($logo!=null) 
        {
            $logo->move(public_path().'/img/','logo'.'.jpg');
            $configuracion->logo='logo'.'.jpg';
        }

        $configuracion->nombre=$request->get('nombre'); //es un campo de mi crud
        

        $fondo=$request->file('fondo');
        /* $fondo es una variable  $request es una variable de solicitud lo que esta en las
        comillas simples 'fondo' es el name que se encuentra en la vista
        -----------------------------------------------------------------------
        file() es un método
        -----------------------------------------------------------------------
        esto dice, que en la variable $fondo se va guardar la imagen que lo va tomar del request (solicitud)
         y que se va tratar de un archivo ->file() y que lo va tomar de la vista con el nombre de fondo
        */

        if ($fondo!=null)
        {
            $fondo->move(public_path().'/img/','fondo'.'.jpg');
            /*Esto dice, que lo que este en la variable $fondo lo va mover a public que esta en la carpeta img
            va recibir el nombre de fondo concatenando el formato .jpg*/
            $configuracion->fondo='fondo'.'.jpg';
            /*
               Esto guarda el nombre del archivo en la columna(tupla) de fondo de la base de datos, y recibe el nombre de 'fondo'.'.jpg' esta concatenado con el punto
            */
        }

        $configuracion->footer=$request->get('footer');

        $icono=$request->file('icono');

        if ($icono!=null)
        {
            $icono->move(public_path().'/img/','icono'.'.png');
            $configuracion->icono='icono'.'.png';
        }

        $configuracion->seccion1=$request->get('seccion1');
        $configuracion->seccion2=$request->get('seccion2');
        $configuracion->seccion3=$request->get('seccion3');
        $configuracion->seccion4=$request->get('seccion4');
        $configuracion->seccion5=$request->get('seccion5');
        $configuracion->seccion6=$request->get('seccion6');
        $configuracion->seccion7=$request->get('seccion7');
        $configuracion->seccion8=$request->get('seccion8');
        $configuracion->seccion9=$request->get('seccion9');
        $configuracion->seccion10=$request->get('seccion10');

        $configuracion->save();
         Cache::flush();//varcia la cache

        return redirect()->route('config.index');
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
    }
}
