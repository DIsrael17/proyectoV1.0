@extends('layouts.admin.master')
@section('titulo','Imagenes Crear')
@section('contenido')
<div class="row">
    @include('layouts.admin.errors')
</div>

<form method="POST" action="{{route('image.store')}}" role="form" class="container"  enctype="multipart/form-data">
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
				<label>Archivo</label>
				<input type="file" name="imagen" class="form-control">
			</div>
			
		</div>

		<div class="col-md-6">
			<div class="form-group">
				<label>Descripcion</label>
				<input type="text" name="descripcion" class="form-control">
			</div>
			
		</div>

	</div>
{{--termina el primer row --}}

<div class="row">
	<div class="col-md-8">
		<input type="submit" value="Guardar" class="btn btn-primary">

		<a href="{{route('image.index')}}" class="btn btn-danger">Cancelar</a>
	</div>
</div>

</form>


@endsection