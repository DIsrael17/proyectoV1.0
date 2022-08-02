@extends('layouts.admin.master')
@section('titulo','Crear Noticia')
@section('contenido')
<div class="row">
    @include('layouts.admin.errors')
</div>

<form method="POST" action="{{route('noot.store')}}" role="form" class="container">
	{{csrf_field()}}

{{--1 row --}}
	
{{--termina el primer row --}}

<div class="row">
	

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


</div>

<div class="row">

{{-- 		<div class="col-md-6">
			<div class="form-group">
				<label>Numero de noticia</label>
				<input type="text" name="id_noticia" class="form-control" disabled="">
			</div>
			
		</div> --}}

		<div class="col-md-6">
			<div class="form-group">
				<label>Titulo</label>
				<input type="text" name="titulo" class="form-control">
			</div>
			
		</div>

		<div class="col-md-6">
			<div class="form-group">
				<label>Sub Titulo</label>
				<input type="text" name="subtitulo" class="form-control">
			</div>
			
		</div>

		

	</div>
	<div class="row">
		<div class="col-md-12">
				<div class="form-group">
					<label>Redactar cuerpo(Dos mil letras permitidas)</label>
					<textarea type="text" name="descripcion" class="form-control textarea" maxlength="2000" rows="10"></textarea>
				</div>
				
		  </div>
	</div>

	{{--2 row --}}
	<div class="row">

			<div class="col-md-6">
				<div class="form-group">
					<label>Publicado</label><br>
					<label>Si</label>
					<input type="radio" name="publicado" class="" value="1" >
					<label>No</label>
					<input type="radio" name="publicado" class="" value="0">
				</div>
				
			</div>

	</div>
	{{--termina el segundo row --}}

{{--3 row --}}

	<div class="row">

		<div class="col-md-6">
			<label>Elija la Categoria</label>
			<select class="form-control" name="categoria">

				@foreach($categorias as $cat)
					<option value="{{$cat->id_categoria}}">{{$cat->nombre}}</option>
				@endforeach
			</select>
			
		</div>
		<br>
		<br>
		
	</div>
<br>
<br>

	<div class="row">
		<div class="col-md-12 ">
			<input type="submit" value="Guardar" class="btn btn-primary">

			<a href="{{route('noot.index')}}" class="btn btn-danger">Cancelar</a>
		</div>
	</div>

</form>
<br>
<br>
<br>
<br>


@endsection