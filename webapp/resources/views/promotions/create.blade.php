@extends('app')
@section('content')
<div class="container">
	<h3><i class="glyphicon glyphicon glyphicon-bullhorn"></i> New Promotion</h3>

	<form method="POST" action="/promotions" enctype="multipart/form-data">
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
		<input type="hidden" name="_token" value={{csrf_token()}}>

		<div class="form-group">
			<label>Title: </label><input type="text" value="{{Input::old('title')}}" name="title" placeholder="Promotion Title" class="form-control">
		</div>
		<div class="form-group">
			<label>Address: </label><input type="address" value="{{Input::old('address')}}" name="address" placeholder="Address" class="form-control">
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<p>Date: <input type="text" id="datepicker" value="{{Input::old('date')}}" name="date" class="form-control"></p>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<p>Time: <strong>Format(HH:MM PM/AM)<strong> <input type="text" id="datepicker" value="{{Input::old('time')}}" name="time" class="form-control"></p>
				</div>
			</div>
		</div>

		<div class="form-group">
			<label>Price:</label></label><input placeholder="$0.00" value="{{Input::old('price')}}" class="form-control" type="number" name="price" min="0">
		</div>

		<div class="form-group">
			<label>Promotion Image: </label></label><input class="form-control" type="file" name="image" >
		</div>

		<div class="form-group">
			<button type="submit" class="btn btn-success"> ADD </button>
			<a href="/promotions" class="btn btn-danger">Cancel</a>
		</div>

	</form>
</div>
@endsection

@section('javascript')
<script type="text/javascript" src="{{asset('components/jquery-ui/ui/core.js')}}"></script>
<script type="text/javascript" src="{{asset('components/jquery-ui/ui/datepicker.js')}}"></script>
<script>
$(function() {
	console.log('ready');
	$( "#datepicker" ).datepicker();

});
</script>
@endsection
