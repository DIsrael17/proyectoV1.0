@extends('layouts.admin.master')
@section('titulo','Lista de tattoos')
@section('contenido')
<div class="row">
    @include('layouts.admin.errors')
</div>
    
<form method="POST" action="{{ route('tattoos.store')}}" role="form" class="" enctype="multipart/form-data">

	        {{csrf_field()}}

			<div class="row">
				<div class="form-group col col-md-6 ">
		            <label class="color" >Tipo de tattoo:</label>
		            <select name="tipo_de_tattoo" class="form-control-file color " value="">
		            	<option  disabled="value" >Selecciona un tipo de tattoo</option>
		            	@foreach ($tattoos as $tattoo)
		            	{{-- CORREGIR ERROR --}}
		            		<option value="{{$tattoo->id_tipo_tattoo}}"> {{$tattoo->tipo}}</option>
		            	@endforeach
		            </select> 
		        </div>


			</div>
			<div class="row">
				<div class="form-group col col-md-6 ">
		            <label class="color" class="">Nombre</label>
		            <input type="text" name="nombre"    value="" class="form-control color" >
		        </div>
			</div>
			<div class="row">

		        <div class="form-group col col-md-6 ">
		            <label class="color">Descripción</label>
		            <input type="text" name="descripcion" class="form-control color" value="" class="form-control-file">
		        </div>
		    </div>
		    <div class="row">
		    	<div class="form-group col col-md-6 ">
		            <label class="color" >Imagen</label>
		            <input type="file" name="imagen" class="form-control-file color" value="">
		        </div>
		    </div>
		    <div class="row">
		     	<div class="form-group col col-md-6 ">
		            <input type="submit"  value="Guardar" class="btn btn-primary">
		            <a href=" {{ route('tattoos.index') }} " class="btn btn-danger">Cancelar</a>
		        </div>
		    </div>
</form>
@endsection