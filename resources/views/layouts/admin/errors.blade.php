{{--vista para mostrar errores en--}}
{{-- si $errors es mayor que cero --}}
@if(count($errors)>0)
	<div class="alert alert-danger">{{--cajita de errores--}}
		<ul>
			{{-- muestra todos los errores(recorre los errores) --}}
			@foreach($errors->all() as $error)
			<li>{{$error}}</li>

			@endforeach
		</ul>
	</div>
@endif