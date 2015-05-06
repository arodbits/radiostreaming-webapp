@extends('layout.plain')

@section('content')
<h1>Custom Player For your Radio Station</h1>
			<hr>
			<p>Get a customized App for your Radio Station. Android or iOS? We got you covered! Manage the content shown in your app using our Admin Control Panel from your computer. 
			</p>
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
@endsection
@section('sections')
<section id="contact">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2 text-center">
				<h2 class="section-heading">Let's Get In Touch!</h2>
				<hr class="primary">
				<p>Ready to start your next CUSTOM RADIO PLAYER for your Station with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</p>
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