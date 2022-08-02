@extends('layouts.admin.master')
@section('titulo','Videos')
@section('contenido')
<div class="row">
    @include('layouts.admin.errors')
</div>

<form method="POST" action="{{route('videos.update',$modificar->id_video)}}" role="form" class="container">
	<input type="hidden" name="_method" value="PATCH">

	{{csrf_field()}}

	{{--1 row--}}
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label>Numero de Video</label>
				<input type="text" name="id_video" class="form-control" value="{{$modificar->id_video}}">
			</div>
			
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<label>Nombre</label>
				<input type="text" name="nombre" class="form-control" id="nombre" value="{{$modificar->nombre}}">
			</div>
		</div>
		
	</div>
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label>Direccion URL</label>
				<input type="text" name="direccion_url" class="form-control" id="direccion_url" value="{{$modificar->direccion_url}}">
			</div>
		</div>


		<div class="col-md-6">
			<div class="form-group">
				<label>Descripcion</label>
				<input type="text" name="descripcion" class="form-control" id="descripcion" value="{{$modificar->descripcion}}">
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
				<div class="form-group">
					<label>Fecha de Publicacion</label>
					<input type="text" name="fecha_publicacion" class="form-control" id="fecha_publicacion" value="{{$modificar->fecha_publicacion}}">
				</div>
				
		</div>
		<div class="col-md-6">
				<div class="form-group">
					<label>Fecha de Expiracion</label>
					<input type="text" name="fecha_expiracion" class="form-control" id="fecha_expiracion" value="{{$modificar->fecha_expiracion}}">
				</div>
				
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<label>Elija El Tipo de Tattoo</label>
			<select class="form-control" name="tipo_de_tattoo">
				<option disabled="value">Seleccione el Tipo</option>
				@foreach($video as $vid)
					<option value="{{$vid->id_tipo_tattoo}}">{{$vid->tipo}}</option>
				@endforeach
			</select>
			
		</div>

	</div>
	<diw class="row">
		<div class="col-md-6">
			<input type="submit" value="Guardar" class="btn btn-primary">
			<a href="{{route('videos.index')}}" class="btn btn-danger">Cancelar</a>
			
		</div>
	</diw>
</form>

@endsection