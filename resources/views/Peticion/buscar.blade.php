<form action="{{route('peticiones.index')}}" method="GET" role="search">
	<div class="form-group">
		<div class="input-group">
			<input type="text" class="form-control" name="valor" placeholder="Escriba  el folio o el nombre">

			<span class="input-group-btn">
				<button type="submit" class="btn btn-primary">Buscar</button>			
			</span>
		</div>
	</div>
</form>