<!DOCTYPE html>
<html lang="es">
<head>
	<title>PROBANDO LARAVEL - @yield('title')</title>
	<meta charset="utf-8">

</head>
<body>

	@section('header')
		MASTER HEADER
	@show

	<div class="container">
		@yield('content')
	</div>

	@section('footer')
		MASTER FOOTER
	@show


</body>
</html>