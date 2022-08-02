@extends('layouts.admin.master')
@section('titulo','Carousel')
@section('contenido')
<div class="table table-responsive sombrasBorde" >


		<table class=" table" >
			<thead class="table theadB" >
				<tr>
					<th  class="text-center theadB" >Imagen 1</th>
					<th  class="text-center theadB" >Imagen 2</th>
					<th  class="text-center theadB" >Imagen 3</th>
					<th  class="text-center theadB" >Imagen 4</th>
					<th  class="text-center theadB" >Imagen 5</th>
					<th  class="text-center theadB" >Opciones</th>
					
				</tr>
			</thead>
			
			<tbody class="table">

					@foreach ($carousels as $carousel)
						{{-- expr --}}
					
					 <tr>
					 
					 	<td class="text-center">
					 		  @if($carousel->img1!=null)
								<img src=" {{ asset('img/tattoo/'.$carousel->img1) }} " class="img-rounded" width="100" height="100">

								@else
								<img src=" {{ asset('img/tattoo/dimg.jpg') }} " width="100" class="img-rounded" height="100">
								@endif
					 	</td>
					 	<td class="text-center">
					 		@if($carousel->img2!=null)
								<img src=" {{ asset('img/tattoo/'.$carousel->img2) }} " class="img-rounded" width="100" height="100">

								@else
								<img src=" {{ asset('img/tattoo/dimg.jpg') }} " width="100" class="img-rounded" height="100">
								@endif
					 	</td>
					 	<td class="text-center">
					 		@if($carousel->img3!=null)
								<img src=" {{ asset('img/tattoo/'.$carousel->img3) }} " class="img-rounded" width="100" height="100">

								@else
								<img src=" {{ asset('img/tattoo/dimg.jpg') }} " width="100" class="img-rounded" height="100">
								@endif
					 	</td>
					 	<td class="text-center">
					 		@if($carousel->img4!=null)
								<img src=" {{ asset('img/tattoo/'.$carousel->img4) }} " class="img-rounded" width="100" height="100">

								@else
								<img src=" {{ asset('img/tattoo/dimg.jpg') }} " width="100" class="img-rounded" height="100">
								@endif
					 	</td>
					 	<td class="text-center">
					 		@if($carousel->img5!=null)
								<img src=" {{ asset('img/tattoo/'.$carousel->img5) }} " class="img-rounded" width="100" height="100">

								@else
								<img src=" {{ asset('img/tattoo/dimg.jpg') }} " width="100" class="img-rounded" height="100">
								@endif
					 	</td>
					 	<td class="text-center">
					 		<a href=" {{route('Carousel.edit',$carousel->id)}}"><button class="btn btn-primary">EDITAR</button></a>
					 	</td>
			
					 </tr>
				@endforeach
			 </tbody>
		 </table>

</div>
@include('carousel.modal')
@endsection