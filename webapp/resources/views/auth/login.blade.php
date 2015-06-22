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
			<h1>LOGIN</h1>
			<hr>
		</div>
		<form class=" login-form-bg form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="form-group">
				<label class="col-md-4 control-label" style="color: rgba(255, 255, 255, 0.7)">E-Mail Address</label>
				<div class="col-md-6">
					<input type="email" class="form-control" name="email" value="{{ old('email') }}">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-4 control-label" style="color: rgba(255, 255, 255, 0.7)">Password</label>
				<div class="col-md-6">
					<input type="password" class="form-control" name="password">
				</div>
			</div>
			<!--
			<div class="form-group">
				<div class="col-md-6 col-md-offset-4">
					<div class="checkbox">
						<label>
							<input type="checkbox" name="remember"> Remember Me
						</label>
					</div>
				</div>
			</div> -->
			<div class="form-group">
				<div class="col-md-6 col-md-offset-4">
					<button type="submit" class="btn btn-success login-primary">Login</button>
					<a href="/" class="btn btn-primary login-danger">Cancel</a>
					<!-- <a class="btn btn-link" style="color: rgb(95, 100, 115);" href="{{ url('/password/email') }}">Forgot Your Password?</a> -->
				</div>
			</div>
		</form>
	</div>
</div>
@endsection
