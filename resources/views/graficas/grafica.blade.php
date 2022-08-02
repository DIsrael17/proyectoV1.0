@extends('layouts.admin.master')
@section('contenido')
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

	      function drawChart() {
	      	// -----------------------------------------------------------------------
	        var data = google.visualization.arrayToDataTable([
	          ['Tarea o nombre de la tarea', 'algo cuantativo'],

		          @foreach ($graphi as $element)
		          	['{{$element->descripcion}}',{{$element->id_tattoo}}],
		          @endforeach

	       	  ]);
	      	// -----------------------------------------------------------------------
	     
	        var options = {
	          title: 'TATUAJES REALIZADOS'
	        };

	        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

	        chart.draw(data, options);
	      }
    </script>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
@endsection