<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AgendaRequest;
use App\Agenda;
use App\Peticion;  
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
        ->orWhere('titulo','LIKE',"%$valor%")
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
           $agendas = Peticion::all();
          return view('Agenda.create')->with('agendas',$agendas);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AgendaRequest $request)
    {
        $guardar=new Agenda;
        $guardar->id_agenda=$request->get('id_agenda');
        $guardar->titulo=$request->get('titulo');
        $guardar->fechaInicio=$request->get('fechaInicio');
        $guardar->fechaFin=$request->get('fechaFin');
        $guardar->horaInicio=$request->get('horaInicio');
        $guardar->horaFin=$request->get('horaFin');
        $guardar->actividad=$request->get('actividad');
        $guardar->id_peticion=$request->get('id_peticion');
        $guardar->save();
        return redirect()->route('agendas.index') 
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
        $this->validate(request(), 
            [
            'titulo' => 'required',
            'fechaInicio' => 'required',
            'FechaFin' => 'required',
            'actividad' => 'required'
            ]);

        $actualizar=Agenda::find($id);//->update($request->all());;
        // find=busca 
        //request: lo que el for manda en un vector
        //get:obtenemos
        $actualizar->titulo=$request->get('titulo');
        $actualizar->fechaInicio=$request->get('fechaInicio');
        $actualizar->fechaFin=$request->get('fechaFin');
        $actualizar->horaInicio=$request->get('horaInicio');
        $actualizar->horaFin=$request->get('horaFin');
        $actualizar->actividad=$request->get('actividad');

        $actualizar->save();
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

    public function dev()
    {
        return Agenda::all();
    }
}
