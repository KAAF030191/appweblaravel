<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="{{url('ejemplo/mostrarResultado')}}" method="post">
		{{csrf_field()}}
		<input type="text" name="numero1">
		<input type="text" name="numero2">
		<button>enviar</button>
	</form>
</body>
</html>