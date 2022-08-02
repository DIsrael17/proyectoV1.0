@extends('layouts.admin.master')
@section('ttulo','configurar página')
@section('contenido')



<form method="POST" action="{{ route('config.update',$config->id_config) }} " role="form" class="" enctype="multipart/form-data">

        {{csrf_field()}}

            <input type="hidden"  name="_method" value="PATCH">

{{--         <div class="form-group">
            <label class="color">ID</label>
            <input type="text" name="id_config"  disabled="false" value="{{$config->id_config}}" class="form-control input-sm" >
        </div> --}}



        <div class="form-group">
            <label class="color">Logo</label>
            <input type="file" name="logo" class="form-control-file color" value="" class="form-control-file">
        </div>

        <div class="form-group">
            <label class="color" >Fondo</label>
            <input type="file" name="fondo" class="form-control-file color" value="">
        </div>


        <div class="form-group">
                <label class="color" >Icono</label>
                <input type="file" name="icono" class="form-control-file color">
        </div>

        <div class="form-group">
            <label class="color" >Nombre</label>
            <input type="text" name="nombre" class="form-control input-sm" value="{{$config->nombre}}">
        </div>

        <div class="form-group">
            <label class="color" >Footer</label>
            <input type="text" name="footer" class="form-control input-sm" value="{{$config->footer}}">
        </div>


        <div class="form-group">
                <label class="color">Sección 1</label>
                <input type="text" name="seccion1" class="form-control input-sm" value="{{$config->seccion1}}">
        </div>

        <div class="form-group">
            <label class="color" >Sección 2</label>
            <input type="text" name="seccion2" value="{{$config->seccion2}}" class="form-control input-sm">
        </div>


        <div class="form-group">
                <label class="color" > Sección 3</label>
                <input type="text" name="seccion3" value="{{$config->seccion3}}" class="form-control input-sm">
        </div>


        <div class="form-group">
            <label class="color" >Sección 4</label>
            <input type="text" name="seccion4" value="{{$config->seccion4}}" class="form-control input-sm">
        </div>

{{--         <div class="form-group">
                <label class="color" > Sección 5</label>
                <input type="text" name="seccion5" value="{{$config->seccion5}}" class="form-control input-sm">
        </div>

        <div class="form-group">
            <label class="color" >Sección 6</label>
            <input type="text" name="seccion6" value="{{$config->seccion6}}" class="form-control input-sm">
        </div>

        <div class="form-group">
                <label class="color" > Sección 7</label>
                <input type="text" name="seccion7" value="{{$config->seccion7}}" class="form-control input-sm">
        </div>

        <div class="form-group">
            <label class="color" class="color">Sección 8</label>
            <input type="text" name="seccion8" value="{{$config->seccion8}}" class="form-control input-sm">
        </div>


        <div class="form-group">
                <label class="color"> Sección 9</label>
                <input type="text" name="seccion9" value="{{$config->seccion9}}" class="form-control input-sm">
        </div>


        <div class="form-group">
            <label class="color" >Sección 10</label>
            <input type="text" name="seccion10" value="{{$config->seccion10}}" class="form-control input-sm">
        </div> --}}

        <div class="form-group">
            <input type="submit"  value="Guardar" class="btn btn-primary">
            <a href=" {{ route('config.index') }} " class="btn btn-info">Cancelar</a>
        </div>



</form>

@endsection
