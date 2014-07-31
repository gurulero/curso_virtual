@extends('superadmin.layout.layout')
@section('title')
	Inicio Superadministrador
@stop
@section('pagename')
	Crear
@stop
@section('pagedescription')
	curso nuevo
@stop
@section('breadcrumbs')
	<li><a href="{{URL::to('cpanel/courses')}}">Cursos</a></li>
	<li>Crear nuevo curso</li>
@stop
@section('content')
<div class="row">
	<div class="col-lg-12">
		<h1>Crear nuevo curso</h1>
	</div>
	<div class="col-lg-8">
		{{Form::open(array('class'=>'form-horizontal','role'=>'form','method'=>'post','action'=>'courses_controller@store'))}}
		

		  <div class="form-group">
		    <label for="name" class="col-sm-2 control-label">Nombre</label>
		    <div class="col-sm-10">
		      <input type="text" name="name" class="form-control" id="name" placeholder="Nombre" required>
		    </div>
		  </div>

		  <div class="form-group">
		    <label for="category" class="col-sm-2 control-label">Categoría</label>
		    <div class="col-sm-10">
		      <select class="form-control" required>
		      	<option value="0">Sin categoría</option>
		      	@if($categories->count()==0)
		      	<option disabled>No hay categorías creadas</option>
		      	@endif
		      </select>
		    </div>
		  </div>

		  <div class="form-group">
		    <label for="description" class="col-sm-2 control-label">Descripción</label>
		    <div class="col-sm-10">
		      <textarea name="description" id="description" class="form-control" required></textarea>
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="tags" class="col-sm-2 control-label">Tags</label>
		    <div class="col-sm-10">
		      <input type="text" name="tags" id="tags" class="form-control">
		      <small>Separadas por coma</small>
		    </div>
		  </div>


		  <div class="form-group form-actions text-center">
		    
		      <button type="submit" class="btn btn-default">Crear</button>
		    
		  </div>
		{{Form::close()}}
	</div>
</div>
@stop