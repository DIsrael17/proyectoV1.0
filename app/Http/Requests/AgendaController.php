<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\http\Request\AgendasFormRequest;
use App\Agenda;
class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
         $valor=trim($request->get('valor'));

        $agenda=Agenda::orderBy('id_agenda','DESC')
        ->where('id_agenda','LIKE',"%$valor%")
        ->orWhere('fecha','LIKE',"%$valor%")
        ->paginate(5);

        return view('Agenda.index')
        ->with('agendas',$agenda);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view('Agenda.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request,[ 'id_agenda'=>'required', 'fecha'=>'required','hora'=>'required','disponibilidad'=>'required','id_peticion'=>'required','cancelado'=>'required']);
        //Automovil::create($request->all());

        $guardar=new Agenda;
        $guardar->id_agenda=$request->get('id_agenda');
        $guardar->fecha=$request->get('fecha');
        $guardar->hora=$request->get('hora');
        $guardar->disponibilidad=$request->get('disponibilidad');
        $guardar->id_peticion=$request->get('id_peticion');
        $guardar->cancelado=$request->get('cancelado');
        $guardar->save();
        return redirect()->route('agendas.index');
        
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
         $editar=Agenda::find($id);
        return view('Agenda.edit')->with('editar',$editar);
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
        $actualisar=Agenda::find($id);//->update($request->all());;
        // find=busca 
        //localisamos el auto que se ba a evian.
        $actualisar->id_agenda=$request->get('id_agenda');
        //request: lo que el for manda en un vector
        //get:obtenemos
        $actualisar->fecha=$request->get('fecha');
        $actualisar->hora=$request->get('hora');
        $actualisar->disponibilidad=$request->get('disponibilidad');
        $actualisar->id_peticion=$request->get('id_peticion');
        $actualisar->cancelado=$request->get('cancelado');
        $actualisar->save();
        //save:guarda los datos proporcionados.
        

         return redirect()->route('agendas.index');
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
        $elimina=agenda::find($id)->delete();
        return redirect()->route('agendas.index');
    }
}
