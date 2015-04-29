@extends('app')
@section('content')
<div class="container">
	<form method="POST" action="/promotions">
		<div class="form-group">
			<input type="text" name="title" placeholder="Promotion Title">
		</div>
		<div class="form-group">
			<input type="address" name="address" placeholder="Address">
		</div>
		<div class="form-group">
			<button type="submit"> ADD </button>
		</div>

	</form>
</div>
@endsection
