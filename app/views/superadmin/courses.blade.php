@extends('superadmin.layout.layout')
@section('title')
	Inicio Superadministrador
@stop
@section('pagename')
	Cursos
@stop
@section('pagedescription')
	Todos los cursos
@stop
@section('breadcrumbs')
	<li>Cursos</li>
@stop
@section('content')
<div class="row">
	<div class="col-lg-12">
		<h1>Cursos disponibles</h1>
		<a href="{{URL::to('cpanel/courses/create')}}" class="btn btn-primary btn-md" role="button">Crear nuevo curso</a>
	</div>
	<div class="col-lg-12">
		<hr>
	</div>
	<div class="col-lg-12">
		<table class="table table-hover table-striped">
			<thead>
				<th>id</th><th>Nombre</th><th>Estudiantes</th><th>Acciones</th>
			</thead>
			<tbody>
				
					@foreach($courses as $course)
					<tr>
						<td>
							{{$course->id}}
						</td>
						<td>
							{{$course->name}}
						</td>
						<td>
							Este dato todavía no
						</td>
						<td>
							<a href="#" class="btn btn-primary btn-md" role="button"><i class="fa fa-edit"></i></a>
							<a href="#" class="btn btn-danger btn-md" role="button"><i class="fa fa-trash-o"></i></a>
						</td>
					</tr>	
					@endforeach
				
		    </tbody>
		</table>
	</div>

</div>
@stop