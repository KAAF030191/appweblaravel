<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>App Laravel</title>

	<link rel="stylesheet" href="{{asset('css/cssTemplate.css')}}">
	<link rel="stylesheet" href="{{asset('css/normalize.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

	<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
</head>
<body>
	<header>
		@include('template/partial/menuprincipal')
	</header>
	<section style="min-height: 400px;padding: 7px;">
		@yield('cuerpoGeneral')
	</section>
	<footer>
		<h2>Esta sección es el pie</h2>
	</footer>

	<script src="{{asset('js/bootstrap.min.js')}}"></script>
</body>
</html>