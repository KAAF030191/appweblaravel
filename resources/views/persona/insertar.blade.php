@extends('template.templategeneric')
@section('cuerpoGeneral')
<form action="{{url('persona/insertar')}}" method="post">
	<div class="row">
		<div class="col-sm-4">
			<label class="control-label" for="txtNombre">Nombre</label>
			<div>
				<input type="text" id="txtNombre" name="txtNombre" class="form-control">
			</div>
		</div>
		<div class="col-sm-4">
			<label class="control-label" for="txtApellido">Apellido</label>
			<div>
				<input type="text" id="txtApellido" name="txtApellido" class="form-control">
			</div>
		</div>
		<div class="col-sm-4">
			<label for="">.</label>
			<div>
				{{csrf_field()}}
				<input type="submit" value="Registrar datos" class="btn btn-primary" style="width: 100%;">
			</div>
		</div>
	</div>
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