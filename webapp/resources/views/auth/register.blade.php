@extends('layout.plain')
@section('style')
<link rel="stylesheet" href="{{asset('multiforms/css/style.css')}}"/>
@endsection
@section('content')
<div class="container-fluid">
	<div class="row">
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
				<div class="col-md-8 col-md-offset-2">
					<form class="multi-form" role="form" method="POST" action="{{ url('/auth/register') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<ul class="progressbar">
							<li class="active">Your profile</li>
							<li>Second Form</li>
						</ul>
						<fieldset>
							<h2 class="fs-title">Your profile</h1>
							<h3 class="fs-description">Complete the following information</h2>
							<div class="form-group">
								<div class="col-md-12">
									<input type="text" class="form-control" placeholder="Name" name="name" value="{{ old('name') }}">
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-12">
									<input type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}">
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-12">
									<input type="password" class="form-control" placeholder="Password" name="password">
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-12">
									<input type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation">
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-8 col-md-offset-2">
									<button class="next action-button">
									Next
									</button>
								</div>
							</div>
						</fieldset>
						<fieldset>
							<h2 class="fs-title">Second Form</h1>
							<h3 class="fs-description">Description about this form.</h2>
							<div class="form-group">
								<div class="col-md-12">
									<input type="text" class="form-control" placeholder="Name" name="name" value="{{ old('name') }}">
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-12">
									<input type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}">
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-12">
									<input type="password" class="form-control" placeholder="Password" name="password">
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-12">
									<input type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation">
								</div>
							</div>
							<div class="form-group">
								<button class=" previous action-button">
								Previous
								</button>
								<button type="submit" class="submit action-button">
								Submit
								</button>
							</div>
						</fieldset>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection
@section('javascript')
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="{{asset('multiforms/js/multiforms.js')}}"></script>
@endsection