

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
    <link rel="stylesheet" type="text/css" href=" {{asset('css/bootstrap.min.css')}} ">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/cajas/style.css') }}">

</head>
<style type="text/css">
	.bgk
	{
		background: red;
	}

	.tamaño2
	{
		
	}
</style>
<body class="container">
	
	<div class="row bgk">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
		    <!-- Carousel indicators -->
		    <ol class="carousel-indicators">
		        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		        <li data-target="#myCarousel" data-slide-to="1"></li>
		        <li data-target="#myCarousel" data-slide-to="2"></li>
		        <li data-target="#myCarousel" data-slide-to="3"></li>
		        <li data-target="#myCarousel" data-slide-to="4"></li>
		    </ol>   
		    <!-- Wrapper for carousel items -->
		    
		    @foreach ($carousels as $carousel)
		    <div class="carousel-inner tamaño2" title="Imagenes">
		        <div class="item active">
		            <img src=" {{ asset('img/tattoo/'.$carousel->img1) }} " alt="First Slide" class="col col-sm-8 col-sm-offset-2 tamaño2">
		        </div>
		        <div class="item">
		            <img src=" {{ asset('img/tattoo/'.$carousel->img2 )}} " alt="Second Slide" class="col col-sm-8  col-sm-offset-2 tamaño2">
		        </div>
		        <div class="item">
		            <img src=" {{ asset('img/tattoo/'.$carousel->img3) }} " alt="Third Slide" class="col col-sm-8 col-sm-offset-2 tamaño2">
		        </div>
		        <div class="item">

		            <img src=" {{ asset('img/tattoo/'.$carousel->img4)}} " alt="fourth Slide" class="col col-sm-8 col-sm-offset-2 tamaño2">
		        </div>
		        <div class="item">
		            <img src=" {{ asset('img/tattoo/'.$carousel->img5)}} " alt="fifth Slide" class="col col-sm-8 col-sm-offset-2 tamaño2">
		          </div>
		    </div>
		    @endforeach
		    
		</div>

</div>
<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>

<script type="text/javascript">
	$(document).ready(function(){
	     $("#myCarousel").carousel({
	         interval :3000
	     });
	});
	</script>
</body>
</html>