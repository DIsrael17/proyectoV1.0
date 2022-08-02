@extends('layouts.admin.master')
@section('titulo','IMAGENES')
@section('contenido')
<div class="row">
    @include('layouts.admin.success')
</div>


 <div class="row">
	<div class="col-md-8">
		<h3 class="tabla">Mis Imagenes
			<a href="{{route('image.create')}}">
			<button class="btn btn-primary">Nuevo</button>
			</a>
		</h3>
	</div>
</div> 

<table class="table table-responsive sombrasBorde">
	<thead class="tabla">
		<tr>
			<th class="text-center theadB">Numero de Imagen</th>
			<th class="text-center theadB">Nombre</th>
			<th class="text-center theadB">Descripcion</th>
			<th class="text-center theadB">Archivo</th>
			<th class="text-center theadB">Operaciones</th>
		</tr>		
	</thead>

	<tbody class="tabla">
		@foreach($datos as $dato)
		<tr>
			<td class="text-center">{{$dato->id_imagen}}</td>
			<td class="text-center">{{$dato->nombre}}</td>
			{{-- <td>{{$dato->archivo}}</td> --}}
			<th class="text-center">{{$dato->descripcion}}</th>

			<th class="text-center">
				@if ($dato->archivo!=null)
					<img src="{{asset('img/imagenes/'.$dato->archivo)}}" alt="" class="img-rounded" width="100" height="100">
						@else
					<img src="{{asset('img/imagenes/dimg.jpg')}}" alt="" class="img-rounded" width="100" height="100">
				@endif

			</th>
			
			<td class="text-center">
				<a href="{{route('image.edit',$dato->id_imagen)}}"><button type='button' class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span></button></a>


				<a href="" data-target="#modal-delete-{{$dato->id_imagen}}" data-toggle="modal"><button type="button" class="btn btn-danger"><span class='glyphicon glyphicon-trash'></span></button></a>

			</td>
		</tr>
		@include('imagenes.modal')
		@endforeach
		{{$datos->render()}}
	</tbody>
</table>
@endsection