@extends('template.templategeneric')
@section('CuerpoGeneral')
<h1>Insertar Persona</h1>
<form action={{URL('/persona/insertar')}} method="post">
	<label>Nombre: </label>
	<input type="text" name="txtNombre" class="form-control">
	<label>Apellido: </label>
	<input type="text" name="txtApellido" class="form-control">
	{{csrf_field()}}
	<input type="submit" name="" value="Guardar" class="btn btn-primary">	
</form>
<div style="border: 1px solid;">
	<p>Nombre: {{$nombre or ''}} </p>
	<p>Apellido: {{$apellido or ''}} </p>
</div>
<p>Fecha: {{date('Y-m-d H:i:s')}} </p>
@endsection