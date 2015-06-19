@extends('app')
@section('return')
<ul class="nav navbar-nav">
  <li><a href="{{ url("/events") }}">Events</a></li>
</ul>
@endsection
@section('content')
<div class="container">
	<form method="POST" action="/events/{{$event->id}}" enctype="multipart/form-data">
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
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<input type="hidden" name="_method" value="PUT">

		<div class="form-group">
			<label>Title: </label><input type="text" value="{{$event->title}}" name="title" placeholder="event Title" class="form-control">
		</div>
		<div class="form-group">
			<label>Address: </label><input type="address" value="{{$event->address}}" name="address" placeholder="Address" class="form-control">
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<p>Date: <input type="text" id="datepicker" value="{{date('m/d/Y', strtotime($event->date))}}" name="date" class="form-control"></p>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<p>Time: <strong>Format(HH:MM PM/AM)<strong> <input type="text" id="datepicker" value="{{date('h:i A', strtotime($event->time))}}" name="time" class="form-control"></p>
				</div>
			</div>
		</div>

		<div class="form-group">
			<label>Price:</label></label><input placeholder="$0.00" value="{{$event->price}}" class="form-control" type="text" name="price">
		</div>

		<div class="row">
			<div class="col-md-3">
				<div>
					<img class="img-responsive" src="{{$event->image_url}}">
				</div>
			</div>
			<div class="col-md-9">
				<div class="form-group ">
					<label>Change Image: (Max 12MB) </label></label><input class="form-control" type="file" name="image" >
				</div>
				<hr>
				<div class="form-group">
					<button class="btn btn-success" type="submit"><i class="fa fa-check "></i> SAVE CHANGES </button>
					<a class="btn btn-danger" href="/events"><i class="fa fa-close "></i> CANCEL</a>
				</div>
			</div>

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
