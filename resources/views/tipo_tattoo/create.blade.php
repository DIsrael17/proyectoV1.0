@extends('layouts.admin.master')
@section('ttulo','configurar página')
@section('contenido')
<div class="row">
    @include('layouts.admin.errors')
</div>


<form method="POST" action="{{ route('tipo_tattoos.store') }}" role="form" class="" enctype="multipart/form-data">

        {{csrf_field()}}

            {{-- <input type="hidden"  name="_method" value="PATCH"> --}}

        {{-- <div class="form-group">
            <label class="color">Id</label>
            <input type="text" name="id_tipo_tattoo"  disabled="false" value="" class="form-control input-sm" >
        </div> --}}
        <div class="row">
            <div class="form-group col col-md-3">
                <label class="color">Digita el tipo de tattoo</label>
                <input type="text" name="tipo"   value="" class="form-control input-sm" maxlength="50" >
            </div>
        </div>

        <div class="row">
            <div class="form-group col col-md-6">
                <input type="submit"  value="Guardar" class="btn btn-primary">
                <a href="{{ route('tipo_tattoos.index') }}" class="btn btn-danger">Cancelar</a>
            </div>
        </div>
</form>

@endsection