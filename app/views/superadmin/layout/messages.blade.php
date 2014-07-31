@if(Session::has('msg'))
	<div class="col-lg-12">
	@if(Session::get('msg')==1)
		<div class="alert alert-success" role="alert">Curso creado correctamente</div>
	@endif
	@if(Session::get('msg')==2)
		<div class="alert alert-danger" role="alert">Hubo un error validando los datos introducidos</div>
	@endif
</div>
@endif