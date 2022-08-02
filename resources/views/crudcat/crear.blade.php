@extends('layouts.admin.master')
@section('titulo','Crear Categoria')
@section('contenido')
<div class="row">
    @include('layouts.admin.errors')
</div>

<form method="POST" action="{{route('cat.store')}}" role="form" class="container">
	{{csrf_field()}}

{{--1 row --}}
	<div class="row">

		{{-- <div class="col-md-6">
			<div class="form-group">
				<label>Numero de Categoria</label>
				<input type="text" name="id_categoria" class="form-control" disabled="">
			</div>
			
		</div> --}}

		<div class="col-md-6">
			<div class="form-group">
				<label>Nombre de la categoria</label>
				<input type="text" name="nombre" class="form-control" maxlength="50">
			</div>
			
		</div>
	</div>
{{--termina el primer row --}}

<div class="row">
	<div class="col-md-8">
		<input type="submit" value="Guardar" class="btn btn-primary">

		<a href="{{route('cat.index')}}" class="btn btn-danger">Cancelar</a>
	</div>
</div>

</form>


@endsection