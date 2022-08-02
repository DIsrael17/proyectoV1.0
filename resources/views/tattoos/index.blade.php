@extends('layouts.admin.master')
@section('titulo','Lista de tattoos')
@section('contenido')
<div class="row">
    @include('layouts.admin.success')
</div>

	<div class="container">
	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<h1>Listado de tattoos</h1>
			@include('tattoos.buscar')
		</div>
	</div>
	
    <a href="{{route('tattoos.create')}}"><button class="btn btn-success">Nuevo</button></a>
    <div  class="table table-responsive sombrasBorde">
		<table class="table">
			<thead class="table theadB"> 
				<tr>
					<th class="text-center theadB">Folio</th>
					<th class="text-center theadB">Tipo tattoo</th>
					<th class="text-center theadB">Nombre</th>
					<th class="text-center theadB">Descripcion</th>
					<th class="text-center theadB">Imagen</th>
					<th class="text-center theadB">Opciones</th>
				</tr>
			</thead>

			<tbody class="table tbodyB">
				@foreach($tattoos as $tattoo)
					<tr>
						<td class="text-center">{{$tattoo->id_tattoo}}</td> 
						<td class="text-center">{{$tattoo->tipo_tattoo->tipo}}</td>
						<td class="text-center">{{$tattoo->nombre}}</td>
						<td class="text-center">{{$tattoo->descripcion}}</td>
						<td class="text-center"> 
							@if ($tattoo->imagen!=null)
							<img src=" {{ asset('img/tattoos/'.$tattoo->imagen) }} " class="img-rounded" width="100" height="100">
							@else
							<img src=" {{ asset('img/tattoos/dimg.jpg')}} " class="img-rounded" width="100" height="100">
								
							@endif
						</td>


						<td class="text-center">
						<a href="{{route('tattoos.edit',$tattoo->id_tattoo)}}"><button type='button' class='btn btn-primary'><span class='glyphicon glyphicon-pencil'></span></button></a>

   				  		<a href="" data-target="#modal-delete-{{$tattoo->id_tattoo}}" data-toggle="modal"><button type='button' class='btn btn-danger'><span class='glyphicon glyphicon-trash'></span></button></a>

						
					  </td>
					</tr>
					@include('tattoos.modal')
				@endforeach
			</tbody>
		</table>
     </div>
		{{$tattoos->render()}}
	</div>
@endsection
