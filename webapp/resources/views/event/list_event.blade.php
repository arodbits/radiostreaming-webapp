@extends('layout.admin')
@section('title')

<div class="row">
	<div class="col-sm-9">
		<h3><i class="glyphicon glyphicon-dashboard"></i> UPCOMING EVENT</h3> 
	</div>
	<div class="col-sm-3 add-new">
		<a href="/events/create"><i class="glyphicon glyphicon-plus"></i> Add New</a>
	</div>
	<hr>
</div>


@endsection

@section('dashboard')
<div class="row">
<div class="col-sm-12">
	<table class="table table-bordered">
		<thead>
			<th>Id</th>
			<th>Title</th>
			<th>Address</th>
			<th>Date</th>
			<th>Time</th>
			<th>Price</th>
			<th>Actions</th>
		</tr>
	</thead>
	<tbody>
		@foreach($events as $key=>$event)
		<tr data-id="{{$event->id}}">
			<td>{{$event->id}}</td>
			<td>{{$event->title}}</td>
			<td>{{$event->address}}</td>
			<td>{{date('m/d/Y', strtotime($event->date))}}</td>
			<td>{{date('h:i A', strtotime($event->time))}}</td>
			<td>{{$event->price}}</td>
			<td>
				<a href="/events/{{$event->id}}/edit" class="btn btn-warning"><i class="fa fa-pencil-square-o"></i>Edit</a> 
				<form name="delete_form" action="events/{{$event->id}}" method="POST" style="display: inline">
					<input type="hidden" name="_method" value="DELETE">
					<input type="hidden" name="_token" value="{{csrf_token()}}">
					<button data-name="delete" type="submit" href="events" class="btn btn-danger"><i class="fa fa-times"></i>Delete</button>
				</form>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
</div>
</div>
{!!$events->render()!!}
@endsection

@section('javascript')
<script type="text/javascript">
$(function(){
	$("button[data-name='delete']").on('click', function(e){
		e.preventDefault();
		var row = $(this).closest('tr');
		var id = row.data('id');
		console.log(id);
		var form = row.find('form');
		var data = form.serialize();
		var url = form.attr('action');
		$.post(url, data, function(result){
			row.fadeOut();
		})
	});
});
</script>
@endsection