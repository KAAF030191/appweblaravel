<h1>sumar dos numeros</h1>
<form action={{URL('/ejemplo/mostrarresultado')}} method="post">
	<label>Numero1: </label>
	<input type="text" name="numero1">
	<label>Numero2: </label>
	<input type="text" name="numero2">
	{{csrf_field()}}
	<input type="submit" name="" value="Sumar">	
</form>