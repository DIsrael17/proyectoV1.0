<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AgendaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
        //'ElementoHTML(Name)'=>'Regla1|Regla2|reglaN'
            'titulo'=>'required',
            'fechaInicio'=>'required',
            'fechaFin'=>'required',
            'horaInicio'=>'required',
            'horaFin'=>'required',
            'id_peticion'=>'required|max:3'
            //apostrofado tanto en la isquierda y en la derecha
        ];
    }
}
