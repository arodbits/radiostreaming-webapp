
@extends('layout.admin')

@section('title')
<div class="row">
	<div class="col-sm-9">
		<h3><i class="glyphicon glyphicon-flash"></i> My Radio</h3> 
		<hr>
	</div>
</div>
@endsection
@section('dashboard')
<div class="row">
	<div class="col-sm-3">
		<img title="profile image" class="img-rounded img-responsive" src="/uploads/{{$radio->logo_url}}">
		<h1>{{$radio->name}}</h1>
		<P>{{$radio->slogan}}</P>
	</div>
	<div class="col-sm-9">
		<ul class="list-group">
			<li class="list-group-item text-muted" contenteditable="false">General Information</li>
			<li class="list-group-item text-right"><span class="pull-left"><strong class="">Email</strong></span> {{$radio->email}}</li>
			<li class="list-group-item text-right"><span class="pull-left"><strong class="">Phone</strong></span>{{$radio->telephone}}</li>
			<li class="list-group-item text-right"><span class="pull-left"><strong class="">Address</strong></span> {{$radio->address}}
				</li>
			</li>
		</ul>
		<div class="row">
	
	<div class="col-sm-3">
   <a href="/radio/{{$radio->id}}/edit"class="btn btn-info"> Edit My Radio Information</a>
   </div>
</div>
	</div>
</div>	


@endsection
