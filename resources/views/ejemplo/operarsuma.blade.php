@extends('template.templategeneric')
@section('cuerpoGeneral')
<form action="{{url('/ejemplo/mostrarresultado')}}" method="post">
	<label>N1</label>
	<input type="text" name="txtNumeroUno">
	<label>N2</label>
	<input type="text" name="txtNumeroDos">
	{{csrf_field()}}
	<input type="submit" value="Realizar suma">
</form>
@endsection