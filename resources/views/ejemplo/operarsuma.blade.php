<form action="{{url('ejemplo/mostrarresultado')}}" method="post">
	<label>Numero 1</label>
	<input type="text" name="txtnumero1">
	<label>Numero 2</label>
	<input type="text" name="txtnumero2">
	{{csrf_field()}}
	<input type="submit" value="Sumar">


</form>
