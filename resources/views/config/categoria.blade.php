@extends('layouts.admin.master')
@section('titulo','Categorias')
@section('contenido')
<div class="row">
    @include('layouts.admin.success')
</div>

<div class="row">
	<div class="col-md-8">
		<h3 class="tabla">Mis Categorias
			<a href="{{route('cat.create')}}">
			<button class="btn btn-primary"> Nuevo</button>
			</a>
		</h3>
	</div>
</div>

<div class="table table-responsive sombrasBorde">
	<table class="table">
		<thead class="table">
			<tr>
				<th class="text-center theadB">Clave Categoria</th>
				<th class="text-center theadB">Nombre</th>
				<th class="text-center theadB">Operaciones</th>
			</tr>		
		</thead>

		<tbody class="table">
			@foreach($datos as $dato)
			<tr class="text-center">
				<td class="text-center">{{$dato->id_categoria}}</td>
				<td class="text-center">{{$dato->nombre}}</td>
				<td class="text-center">
					<a href="{{route('cat.edit',$dato->id_categoria)}}"><button type='button' class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span></button></a>


					<a href="" data-target="#modal-delete-{{$dato->id_categoria}}" data-toggle="modal"><button type="button" class="btn btn-danger"><span class='glyphicon glyphicon-trash'></span></button></a>

				</td>
			</tr>
			
			@endforeach
			@include('crudcat.modal')
			
		</tbody>
	</table>
</div>

@endsection