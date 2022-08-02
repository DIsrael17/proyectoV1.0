@extends('layouts.admin.master')
@section('titulo','Modificar Noticia')
@section('contenido')
<div class="row">
    @include('layouts.admin.errors')
</div>

<form method="POST" action="{{route('noot.update',$modificar->id_noticia)}}" role="form" class="container">
	<input type="hidden" name="_method" value="PATCH">

	{{csrf_field()}}

	{{--1 row--}}
	<div class="row">

		<div class="col-md-6">
			<div class="form-group">
				<label>Numero de Noticia</label>
				<input type="text" name="id_noticia" class="form-control" value="{{$modificar->id_noticia}}" disabled="">
			</div>
			
		</div>

		

		<div class="col-md-6">
			<div class="form-group">
				<label>Descripcion</label>
				{{-- <input type="text" name="descripcion" class="form-control" id="descripcion" value="{{$modificar->descripcion}}"> --}}

				<textarea type="text" name="descripcion" class="form-control textarea" maxlength="200" rows="5" value="">{{$modificar->descripcion}}</textarea>
			</div>
			
		</div>
		

		<div class="col-md-6">
			<div class="form-group">
				<label>Publicado</label>
				<input type="text" name="publicado" class="form-control" value="{{$modificar->publicado}}" disabled="false">
				<label>Si</label>

				@if($modificar->publicado=="si")
					<input type="radio" name="publicado" class="" value="si" checked="">
				@else
					<input type="radio" name="publicado" class="" value="si">
				@endif
					<label>No</label>
				@if($modificar->publicado=="no")
					<input type="radio" name="publicado" class="" value="no" checked="">
				@else
					<input type="radio" name="publicado" class="" value="no">
				@endif
			</div>
			
		</div>

		<div class="col-md-6">
			<div class="form-group">
				<label>Titulo</label>
				<input type="text" name="titulo" class="form-control" id="titulo" value="{{$modificar->titulo}}">
			</div>
			
		</div>

	</div>
	{{--termina el primer row--}}
	{{--2 row--}}
	
	<div class="row">


		<div class="col-md-6">
			<div class="form-group">
				<label>Sub Titulo</label>
				<input type="text" name="subtitulo" class="form-control" id="subtitulo" value="{{$modificar->subtitulo}}">
			</div>
			
		</div>

		<div class="col-md-6">
			<div class="form-group">
				<label>Fecha de Publicacion</label>
				<input type="date" name="fecha_publicacion" class="form-control" id="fecha_publicacion" value="{{$modificar->fecha_publicacion}}">
			</div>
			
		</div>

		<div class="col-md-6">
			<div class="form-group">
				<label>Fecha de Expiracion</label>
				<input type="date" name="fecha_expiracion" class="form-control" id="fecha_expiracion" value="{{$modificar->fecha_expiracion}}">
			</div>
			
		</div>


		{{----}}
		<div class="col-md-6">
			<label>Elija la Categoria</label>
			<select class="form-control" name="categoria">
				@foreach($categorias as $cat)
					<option value="{{$cat->id_categoria}}">{{$cat->nombre}}</option>
				@endforeach
			</select>
			
		</div>
		{{----}}

		
	</div>

	{{--termina el 2 row--}}


	<div class="row">
		<div class="col-md-8">
			<input type="submit" value="Guardar" class="btn btn-primary">
			<a href="{{route('noot.index')}}" class="btn btn-info">Cancelar</a>
			
		</div>
		
	</div>

</form>

@endsection