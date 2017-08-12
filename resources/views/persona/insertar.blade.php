@extends('template.templategeneric')
@section('CuerpoGeneral')
<h1>Insertar Persona</h1>
<form action={{URL('/persona/insertar')}} method="post">
	<div class="row">
		<div class="col-sm-4">
			<label>Nombre: </label>
			<div>
				<input type="text" name="txtNombre" class="form-control">			
			</div>		
		</div>
		<div class="col-sm-4">
			<label>Apellido: </label>
			<div>
				<input type="text" name="txtApellido" class="form-control">
			</div>		
		</div>
		<div class="col-sm-4">
			{{csrf_field()}}
			<input type="submit" name="" value="Guardar" class="btn btn-primary" style="margin-top: 10px;">		
		</div>
	</div>
</form>
<!--<div style="border: 1px solid;">
	<p>Nombre: {{$nombre or ''}} </p>
	<p>Apellido: {{$apellido or ''}} </p>
</div>
<p>Fecha: {{date('Y-m-d H:i:s')}} </p>-->
@endsection