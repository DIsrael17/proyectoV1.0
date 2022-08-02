@extends('layouts.admin.master')
@section('titulo','Editando tipo tattoo')
@section('contenido')
<div class="row">
    @include('layouts.admin.errors')
</div>

<form method="POST" action="{{ route('tipo_tattoos.update',$editar->id_tipo_tattoo)}}"  role="form">
							{{ csrf_field() }}

		<input name="_method" type="hidden" value="PATCH">
		{{--patch:es un metodo que indica que se realisara una actualisacion a los datos.--}}
		<div class="row">

			<div class="col-xs-6 col-sm-6 col-md-6">
				<div class="form-group">
					<p>Modificar el nombre del tipo de tattoo:</p>
					<input type="text" name="tipo" value="{{$editar->tipo}}">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-6">
				<input type="submit"  value="Guardar" class="btn btn-primary">

				<a href="{{ route('tipo_tattoos.index')}}" class="btn btn-danger" >Cancelar</a>
			</div>
		</div>

</form>

@endsection