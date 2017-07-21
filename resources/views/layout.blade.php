<!DOCTYPE html>
<html lang="es">
<head>
	<title>Hiring Test Project</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
	
	<div class="container-fluid">
		<div class="row">
			@yield('content')
		</div>
	</div>
	<script src="{{ asset('js/jquery.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/moment-with-locales.js') }}"></script>
	<script src="{{ asset('js/bootstrap-datetimepicker.js') }}"></script>
	<script src="{{ asset('js/custom.js') }}"></script>
</body>
</html>