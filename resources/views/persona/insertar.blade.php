@extends('template.templategeneric')
@section('CuerpoGeneral')
<h1>Insertar Persona</h1>
<form action={{URL('/persona/insertar')}} method="post">
	<label>Nombre: </label>
	<input type="text" name="txtNombre">
	<label>Apellido: </label>
	<input type="text" name="txtApellido">
	{{csrf_field()}}
	<input type="submit" name="" value="Guardar">	
</form>
<div style="border: 1px solid;">
	<p>Nombre: {{$nombre or ''}} </p>
	<p>Apellido: {{$apellido or ''}} </p>
</div>
@endsection