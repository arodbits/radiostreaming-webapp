@extends('app')
@section('content')
<div class="container">
	<form method="POST" action="/promotions">
		<div class="form-group">
			<label>Title: </label><input type="text" name="title" placeholder="Promotion Title" class="form-control">
		</div>
		<div class="form-group">
			<label>Address: </label><input type="address" name="address" placeholder="Address" class="form-control">
		</div>
        <div class="row">
        	<div class="col-md-6">
				<div class="form-group">
					<p>Date: <input type="text" id="datepicker" name="date" class="form-control"></p>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<p>Time: <input type="text" id="datepicker" name="time" class="form-control"></p>
				</div>
			</div>
		</div>

		<div class="form-group">
			<label>Price:</label></label><input placeholder="$0.00" class="form-control" type="number" name="price" min="0">
		</div>

		<div class="form-group">
			<label>Promotion Image: </label></label><input class="form-control" type="file" name="image" >
		</div>

		<div class="form-group">
			<button type="submit"> ADD </button>
			<a href="#">Cancel</a>
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
