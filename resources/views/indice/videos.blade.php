@extends('layouts.user.master')
@foreach ( $datos as $dato )
	@section('titulo',"$dato->seccion4")
@endforeach
@section('contenido')

<div class="row">
	<h1>Mis videos<i class="fa fa-heart"></i></h1>
		@foreach ( $videos as $video )
		  	 <div class="col-sm-6">
				<div class="embed-responsive embed-responsive-16by9 sombrasBorde">
				    <object >
						<param name="movie" value="http://www.youtube.com/v/{{$video->direccion_url}}">
						<param name="wmode" value="transparent">
						<embed src="http://www.youtube.com/v/{{$video->direccion_url}}" type="application/x-shockwave-flash" wmode="transparent" height="355" width="425">
					</object> 
				</div>
		    </div>
		@endforeach
</div>
<br>
<br>
<br>

@endsection