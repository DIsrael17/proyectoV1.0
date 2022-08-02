@extends('layouts.admin.master')
@section('titulo','Configurando')
@section('contenido')

<div class="table table-responsive sombrasBorde" >
		<table class="table" >
			<thead class="table theadB" >
				<tr>
					<th class="text-center theadB">ID</th>
					<th class="text-center theadB">Logo</th>
					<th class="text-center theadB">Nombre</th>
					<th class="text-center theadB">Fondo</th>
					<th class="text-center theadB">Pie de página</th>
					<th class="text-center theadB">Ícono</th>
					<th class="text-center theadB">Sección 1</th>
					<th class="text-center theadB">Sección 2</th>
					<th class="text-center theadB">Sección 3</th>
					<th class="text-center theadB">Sección 4</th>
				{{-- <th class="text-center theadB">Sección 5</th>
					<th class="text-center theadB">Sección 6</th>
					<th class="text-center theadB">Sección 7</th>
					<th class="text-center theadB">Sección 8</th>
					<th class="text-center theadB">Sección 9</th>
					<th class="text-center theadB">Sección 10</th> --}}
					<th class="text-center theadB">Acción</th>
				</tr>
			</thead>
			
			<tbody class="table">
					@foreach($configuraciones as $configuracion)
						<tr>
							<td class="text-center">
								{{$configuracion->id_config}}
							</td>
							<td class="text-center">
								@if($configuracion->logo!=null)
								<img src=" {{ asset('img/'.$configuracion->logo) }} " class="img-rounded" width="100" height="100">

								@else
								<img src=" {{ asset('img/dlogo.jpg') }} " width="100" class="img-rounded" height="100">
								@endif
							</td>
							<td class="text-center">
								{{$configuracion->nombre}}</td>
							<td class="text-center">
								@if($configuracion->fondo!=null)
								<img src=" {{ asset('img/'.$configuracion->fondo) }} " class="img-rounded" width="100" height="100">

								@else
								<img src=" {{ asset('img/dfondo.jpg') }} " width="100" class="img-rounded" height="100">
								@endif
							</td>
							<td class="text-center">
								{{$configuracion->footer}}</td>
							<td class="text-center">
								@if($configuracion->icono!=null)
								<img src=" {{ asset('img/'.$configuracion->icono) }} " class="img-rounded" width="100" height="100">

								@else
								<img src=" {{ asset('img/dicono.png') }} " width="100" class="img-rounded" height="100">
								@endif
							</td>
							<td class="text-center">{{$configuracion->seccion1}}</td>
							<td class="text-center">{{$configuracion->seccion2}}</td>
							<td class="text-center">{{$configuracion->seccion3}}</td>
							<td class="text-center">{{$configuracion->seccion4}}</td>
{{-- 						<td class="text-center">{{$configuracion->seccion5}}</td>
							<td class="text-center">{{$configuracion->seccion6}}</td>
							<td class="text-center">{{$configuracion->seccion7}}</td>
							<td class="text-center">{{$configuracion->seccion8}}</td>
							<td class="text-center">{{$configuracion->seccion9}}</td>
							<td class="text-center">{{$configuracion->seccion10}}</td> --}}

							<td class="text-center">
								<a href=" {{route('config.edit',$configuracion->id_config)}}"><button class="btn btn-primary">EDITAR</button></a>
							</td>
						</tr>
					@endforeach
			  </tbody>
		 </table>
</div>


    


@endsection