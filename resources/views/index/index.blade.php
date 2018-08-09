<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- jquery -->
	<script src="{{ asset('js/jquery.min.js') }}"></script>
	<!-- Boostrap -->
	<!-- Latest compiled and minified CSS -->
	<link href="{{ asset('bootstrap-3.3.7/dist/css/bootstrap.min.css') }}" rel="stylesheet"/>
	<!-- Optional theme -->
	<link href="{{ asset('bootstrap-3.3.7/dist/css/bootstrap.min.css') }}" rel="stylesheet"/>
	<!-- Latest compiled and minified JavaScript -->
	<script src="bootstrap-3.3.7/dist/js/bootstrap.min.js"></script>
</head>
<body>

	<div class="container">
		@yield('content')
	</div>
</body>
</html>