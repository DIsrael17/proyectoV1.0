@if(session('store'))
	<div class="alert alert-success alert-dismissable  custom-success-box"><a href="#" class="close" data-dismiss="alert" aria-label="close">X</a>
		<strong>{{session('store')}}</strong>
	</div>
@endif