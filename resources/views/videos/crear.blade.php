@extends('layouts.admin.master')
@section('titulo','Videos Crear')
@section('contenido')
<div class="row">
    @include('layouts.admin.errors')
</div>

<form method="POST" action="{{route('videos.store')}}" role="form" class="container">
	{{csrf_field()}}

{{--1 row --}}
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label>Titulo</label>
				<input type="text" name="nombre" class="form-control">
			</div>
			
		</div>

		<div class="col-md-6">
			<div class="form-group">
				<label>Direccion URL</label>
				<input type="text" name="direccion_url" class="form-control" placeholder="ejemplo: https://www.youtube.com/watch?v=ZyyXkD61YfM">
			</div>
			
		</div>

		<div class="col-md-6">
			<div class="form-group">
				<label>Descripcion</label>
				<input type="text" name="descripcion" class="form-control">
			</div>
			
		</div>

		<div class="col-md-6">
			<div class="form-group">
				<label>Fecha de Publicacion</label>
				<input type="date" name="fecha_publicacion" class="form-control">
			</div>
			
		</div>

		<div class="col-md-6">
			<div class="form-group">
				<label>Fecha de Expiracion</label>
				<input type="date" name="fecha_expiracion" class="form-control">
			</div>
			
		</div>

	

		<div class="col-md-6">
			<label>Elija El Tipo de Tattoo</label>
			<select class="form-control" name="tipo_de_tattoo">
				<option disabled="value">Seleccione el Tipo</option>
				@foreach($video as $vid)
					<option value="{{$vid->id_tipo_tattoo}}">{{$vid->tipo}}</option>
				@endforeach
			</select>
			
		</div>


	</div><br>

	
{{--termina el primer row --}}

<div class="row">
	<div class="col-md-3">
		<input type="submit" value="Guardar" class="btn btn-primary">

		<a href="{{route('videos.index')}}" class="btn btn-danger">Cancelar</a>
	</div>
</div>

</form>


@endsection