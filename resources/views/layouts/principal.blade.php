<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
	<title>Site de Casamentos</title>
	<meta name="csrf-token" content="{{csrf_token()}}">
	<style>
		body{
			padding: 20px;
		}
		.navbar{
			margin-bottom: 20px;
		}
	</style>
	<!--  Styles  -->
  <link rel="stylesheet" href="css/app.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		@component('component_navbar', ["current" => $current])
		@endcomponent
		<main role="main">
			@hasSection('body')
				@yield('body')
			@endif

		</main>
		
	</div>

	<script src="{{asset ('js/app.js')}}" type="text/javascript"></script>
</body>
</html>