<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('title')</title>
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/custom.css')}}">
</head>
<body>
	@include('layout.menu')
	<div class="container">
		<div class="row mt-5">
			@yield('content')
		</div>
	</div>
	@include('layout.footer')
	<script type="text/javascript" src="{{asset('js/jquery-3.5.1.slim.min.js')}}"></script>		
	<script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>		
	<script type="text/javascript" src="{{asset('js/custom.min.js')}}"></script>	
</body>
</html>