@extends('layout.main')
@section('menu')
<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
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
					<li>
						<a class="page-scroll" href="#contact">Contact</a>
					</li>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
@endsection
@section('content')
	<h1>Mobile Audio Player APP for your Radio Station</h1>
	<hr>
	<p>Android or iOS? We got you covered! Manage the content shown in your Audio Player APP using your own personalized Admin Control Panel.
	</p>
	<a href="auth/register" class="btn btn-default btn-xl">Get Started!</a>
@endsection
@section('sections')
	<section id="contact">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2 text-center">
					<h2 class="section-heading">Let's Get In Touch!</h2>
					<hr class="primary">
					<p>Ready to get your Radio Station to a higher level? That's great! Give us a call or send us an email, and we'll get back to you!</p>
				</div>
				<div class="col-lg-4 col-lg-offset-2 text-center">
					<i class="fa fa-phone fa-3x wow bounceIn"></i>
					<p>(862) 239-4259</p>
				</div>
				<div class="col-lg-4 text-center">
					<i class="fa fa-envelope-o fa-3x wow bounceIn" data-wow-delay=".1s"></i>
					<p><a href="mailto:your-email@your-domain.com">Capitalofcode@gmail.com</a></p>
				</div>
			</div>
		</div>
	</section>
@endsection
<!--  <a href="#about" class="btn btn-primary btn-xl page-scroll">Find Out More</a> -->
@section('javascript')
	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
	<!-- Plugin JavaScript -->
	<script src="{{asset('theme/startbootstrap-creative/js/jquery.easing.min.js')}}"></script>
	<script src="{{asset('theme/startbootstrap-creative/js/jquery.fittext.js')}}"></script>
	<script src="{{asset('theme/startbootstrap-creative/js/wow.min.js')}}"></script>
	<!-- Custom Theme JavaScript -->
	<script src="theme/startbootstrap-creative/js/creative.js"></script>
@endsection