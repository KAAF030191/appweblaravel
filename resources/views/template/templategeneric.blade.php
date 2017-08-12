<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>App Laravel</title>

	<style>
		h1
		{
			color: #ffffff;
			margin: 0px;
			margin-bottom: 7px;
			padding: 0px;
			padding-bottom: 5px;
			padding-top: 5px;
		}
		body
		{
			margin: 0px;
			padding: 0px;
		}
		header
		{
			background-color: #6282A3;
			display: block;
			margin: 0px;
			padding: 0px;
			width: 100%;
		}
		header > a
		{
			color: #ffffff;
		}
		footer
		{
			background-color: #f5f5f5;
			display: block;
			margin: 0px;
			margin-top: 10px;
			padding: 0px;
			padding-bottom: 5px;
			padding-top: 5px;
			width: 100%;
		}
	</style>
</head>
<body>
	<header>
		@include('template/partial/menuprincipal')
	</header>
	<section style="min-height: 400px;">
		@yield('cuerpoGeneral')
	</section>
	<footer>
		<h2>Esta sección es el pie</h2>
	</footer>
</body>
</html>