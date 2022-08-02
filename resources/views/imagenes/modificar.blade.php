@extends('layouts.admin.master')
@section('titulo','Imagen')
@section('contenido')
<div class="row">
    @include('layouts.admin.errors')
</div>

<form method="POST" action="{{route('image.update',$modificar->id_imagen)}}" role="form" class="container" enctype="multipart/form-data">
	<input type="hidden" name="_method" value="PATCH">

	{{csrf_field()}}

	{{--1 row--}}
	<div class="row">

		<div class="col-md-6">
			<div class="form-group">
				<label>Numero de Imagen</label>
				<input type="text" name="id_imagen" class="form-control" value="{{$modificar->id_imagen}}">
			</div>
			
		</div>

		

		<div class="col-md-6">
			<div class="form-group">
				<label>Nombre</label>
				<input type="text" name="nombre" class="form-control" id="nombre" value="{{$modificar->nombre}}">
			</div>
			
		</div>
		
	</div>

{{----}}
	
	<div class="form-group">
		<div class="col-md-6">
			<label>Ingrese el Archivo</label>
			<input type="file" name="imagen" class="form-control">
		</div>
	</div>
			
	{{----}}


	<div class="col-md-6">
			<div class="form-group">
				<label>Descripcion</label>
				<input type="text" name="descripcion" class="form-control" id="descripcion" value="{{$modificar->descripcion}}">
			</div>
			
	</div>

			
	{{--termina el primer row--}}
	

	<div class="row">
		<div class="col-md-8">
			<input type="submit" value="Guardar" class="btn btn-primary">
			<a href="{{route('image.index')}}" class="btn btn-info">Cancelar</a>
			
		</div>
		
	</div>

</form>

@endsection