@extends('template.templategeneric')
@section('cuerpoGeneral')
<form action="{{url('persona/insertar')}}" method="post">
	<label for="txtNombre">Nombre</label>
	<input type="text" id="txtNombre" name="txtNombre">
	<label for="txtApellido">Apellido</label>
	<input type="text" id="txtApellido" name="txtApellido">
	{{csrf_field()}}
	<input type="submit" value="Registrar datos">
</form>
<div style="border: 1px solid #999999;margin: 5px;">
	<b>Nombre: </b>{{$nombre or ''}}
	<br>
	<b>Apellido: </b>{{$apellido or ''}}
</div>
...
@endsectiond