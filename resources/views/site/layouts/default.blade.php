<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
	<title>Site</title>
	<meta name="csrf-token" content="{{csrf_token()}}">
	<style>
		.navbar{
			margin-bottom: 20px;
		}
	</style>
	<!--  Styles  -->
  <link rel="stylesheet" href="css/app.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/fontawesome.all.min.css') }}">
  

  @hasSection ('css')
  	@yield('css')  
  @endif

</head>
<body>

	<div class="container">
		<main role="main">
			@hasSection('main')
				@yield('main')
			@endif
		</main>
	</div>
	
	<script src="{{ asset('js/jquery.min.js') }}"></script>
  	<script src="{{ asset('js/popper.min.js') }}"></script>
  	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	@hasSection('javascript')
		@yield('javascript')
	@endif
</body>
</html>