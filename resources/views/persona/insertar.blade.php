@extends('template.templategeneric')
@section('cuerpoGeneral')
<form action="{{url('persona/insertar')}}" method="post">
	<label for="txtNombre">Nombre</label>
	<input type="text" id="txtNombre" name="txtNombre" class="form-control">
	<label for="txtApellido">Apellido</label>
	<input type="text" id="txtApellido" name="txtApellido" class="form-control">
	{{csrf_field()}}
	<input type="submit" value="Registrar datos" class="btn btn-primary">
</form>
<div style="border: 1px solid #999999;margin: 5px;">
	<b>Nombre: </b>{{$nombre or ''}}
	<br>
	<b>Apellido: </b>{{$apellido or ''}}
</div>
<script>
	$('#txtNombre').val();
</script>
@endsection