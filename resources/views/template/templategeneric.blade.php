<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<header>@include('template/partial/headerbanner')</header>
	<section>
		@yield('CuerpoGeneral')
	</section>
	<footer>Este es el pie</footer>	
</body>
</html>