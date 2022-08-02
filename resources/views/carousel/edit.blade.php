@extends('layouts.admin.master')
@section('ttulo','Carousel')
@section('contenido')


<form method="POST" action="{{ route('Carousel.update',$carousel->id) }}" role="form" class="" enctype="multipart/form-data">

	        {{csrf_field()}}

	            <input type="hidden"  name="_method" value="PATCH">

	        <div class="form-group">
	            <label class="color" class="">Imagen 1</label>
	            <input type="file" name="img1"   value="" class="form-control-file color" >
	        </div>



	        <div class="form-group">
	            <label class="color">Imagen 2</label>
	            <input type="file" name="img2" class="form-control-file color" value="" class="form-control-file">
	        </div>

	        <div class="form-group">
	            <label class="color" >Imagen 3</label>
	            <input type="file" name="img3" class="form-control-file color" value="">
	        </div>


	        <div class="form-group">
	                <label class="color" >Imagen 4</label>
	                <input type="file" name="img4" class="form-control-file color">
	        </div>

	        <div class="form-group">
	            <label class="color" >Imagen 5</label>
	            <input type="file" name="img5" class="form-control-file color" value="">
	        </div>

	        

	        <div class="form-group">
	            <input type="submit"  value="Guardar" class="btn btn-primary">
	            <a href=" {{ route('Carousel.index') }} " class="btn btn-danger">Cancelar</a>
	        </div>


</form>
@endsection()