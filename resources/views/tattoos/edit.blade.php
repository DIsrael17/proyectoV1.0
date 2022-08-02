@extends('layouts.admin.master')
@section('ttulo','configurar página')
@section('contenido')
<div class="row">
    @include('layouts.admin.errors')
</div>


<form method="POST" action="{{ route('tattoos.update',$tattoos->id_tattoo) }} " role="form" class="" enctype="multipart/form-data">

        {{csrf_field()}}

       <input type="hidden"  name="_method" value="PATCH">

        <div class="row">
                <div class="form-group col col-md-6">
                        <label class="color" >Tipo de tattoo:</label>
                        <select name="tipo_de_tattoo" class="form-control-file color " value="">
                            <option  disabled="value" >Selecciona un tipo de tattoo</option>
                            @foreach ($tipos as $tipo)
                            {{-- CORREGIR ERROR --}}
                                <option value="{{$tipo->id_tipo_tattoo}}"> {{$tipo->tipo}}</option>
                            @endforeach
                            
                        </select>
               </div>
        </div>

        <div class="row">
            <div class="form-group col col-md-6">
                <label class="color" class="">Nombre</label>
                <input type="text" name="nombre"    value="{{$tattoos->nombre}}" class="form-control color" >
            </div>
        </div>
            

        <div class="row">
            <div class="form-group col col-md-6">
                <label class="color">Descripción</label>
                <input type="text" name="descripcion" class="form-control color" value="{{$tattoos->descripcion}}" class="form-control-file">
            </div>
        </div>

        <div class="row">
            <div class="form-group col col-md-6">
                <label class="color" >Imagen</label>
                <input type="file" name="imagen" class="form-control-file color" value="">
            </div>
        </div>

        <div class="row">
            <div class="form-group col col-md-6">
                <input type="submit"  value="Guardar" class="btn btn-primary">
                <a href=" {{ route('tattoos.index') }} " class="btn btn-danger">Cancelar</a>
            </div>
        </div>
</form>

@endsection
