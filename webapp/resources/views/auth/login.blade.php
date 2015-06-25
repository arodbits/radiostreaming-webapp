@extends('layout.plain')
@section('content')
<div class="full-centered">
	<div class="col-md-8 col-md-offset-2">
		@if (count($errors) > 0)
		<div class="alert alert-danger">
			<strong>Whoops!</strong> There were some problems with your input.<br><br>
			<ul>
				@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
		@endif
		<div class="row">
			<h1>STATION CONNECT</h1>
			<hr>
		</div>
		<div class="col-md-8 col-md-offset-2">
		<form class="login-form-bg" role="form" method="POST" action="{{ url('/auth/login') }}">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="form-group">
					<input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}">
			</div>
			<div class="form-group">
					<input type="password" class="form-control" placeholder="Password" name="password">
			</div>
			<div class="form-group">
					<button type="submit" class="btn btn-success login-primary">Login</button>
					<a href="/" class="btn btn-primary login-danger">Cancel</a>
					<!-- <a class="btn btn-link" style="color: rgb(95, 100, 115);" href="{{ url('/password/email') }}">Forgot Your Password?</a> -->
			</div>
		</form>
		</div>
	</div>
</div>
@endsection
