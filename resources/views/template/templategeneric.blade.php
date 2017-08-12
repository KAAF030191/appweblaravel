<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
	<script type="text/javascript" src="{{asset('js/jquery-3.2.1.min.js')}}" ></script>
	<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}" ></script>
</head>
<body>
	<header>@include('template/partial/headerbanner')</header>
	<section>
		@yield('CuerpoGeneral')
	</section>
	<footer>Este es el pie</footer>	
</body>
</html>