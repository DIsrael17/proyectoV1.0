@extends('layouts.admin.master')
@section('titulo','Modificar Categoria')
@section('contenido')
<div class="row">
    @include('layouts.admin.errors')
</div>

<form method="POST" action="{{route('cat.update',$modificar->id_categoria)}}" role="form" class="container">
	<input type="hidden" name="_method" value="PATCH">

	{{csrf_field()}}

	{{--1 row--}}
	<div class="row">

		<div class="col-md-6">
			<div class="form-group">
				<label>Nombre</label>
				<input type="text" name="nombre" class="form-control" id="descripcion" value="{{$modificar->nombre}}">
			</div>
			
		</div>
		
	</div>
	{{--termina el primer row--}}
	

	<div class="row">
		<div class="col-md-8">
			<input type="submit" value="Guardar" class="btn btn-primary">
			<a href="{{route('cat.index')}}" class="btn btn-info">Cancelar</a>
			
		</div>
		
	</div>

</form>

@endsection