@extends('layout.admin')
@section('title')

<div class="row">
	<div class="col-sm-9">
		<h3><i class="glyphicon glyphicon-dashboard"></i> Promotions</h3> 
	</div>
	<div class="col-sm-3 add-new">
		<a href="/promotions/create"><i class="glyphicon glyphicon-plus"></i> Add New</a>
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
		@foreach($promotions as $key=>$promotion)
		<tr data-id="{{$promotion->id}}">
			<td>{{$promotion->id}}</td>
			<td>{{$promotion->title}}</td>
			<td>{{$promotion->address}}</td>
			<td>{{date('m/d/Y', strtotime($promotion->date))}}</td>
			<td>{{date('h:i A', strtotime($promotion->time))}}</td>
			<td>{{$promotion->price}}</td>
			<td>
				<a href="/promotions/{{$promotion->id}}/edit" class="btn btn-warning"><i class="fa fa-pencil-square-o"></i>Edit</a> 
				<form name="delete_form" action="promotions/{{$promotion->id}}" method="POST" style="display: inline">
					<input type="hidden" name="_method" value="DELETE">
					<input type="hidden" name="_token" value="{{csrf_token()}}">
					<button data-name="delete" type="submit" href="promotions" class="btn btn-danger"><i class="fa fa-times"></i>Delete</button>
				</form>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
</div>
</div>
{!!$promotions->render()!!}
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