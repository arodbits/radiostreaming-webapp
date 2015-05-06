<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>WebApp</title>
	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{asset('/components/font-awesome/css/font-awesome.min.css')}}">

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
</head>
	<body style="margin-top:70px">
		<nav class="navbar navbar-trans navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapsible">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand text-danger" href="/">Station Connect</a>
				</div>
				<div class="navbar-collapse collapse" id="navbar-collapsible">
					<ul class="nav navbar-nav">
						<li><a href="{{ url('/promotions') }}">Promotions</a></li>
					</ul>

					<ul class="nav navbar-nav navbar-right">
						@if (Auth::guest())
						<li><a href="{{ url('/auth/login') }}">Login</a></li>
						@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ url('/auth/logout') }}">Logout</a></li>
							</ul>
						</li>
						@endif
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-heart-o fa-lg"></i></a></li>
					</ul>
				</div>
			</div>
		</nav>
		@yield('content')
		<!-- Scripts -->
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
		@yield('javascript')
	</body>
</html>
