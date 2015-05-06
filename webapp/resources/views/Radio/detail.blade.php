
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
		<img title="profile image" class="img-rounded img-responsive" src="{{asset('images/loginbg.jpg')}}">
		<h1>RADIO PROEZAS</h1>
		<P>En Cristo Podemos!</P>
	</div>
	<div class="col-sm-9">
		<ul class="list-group">
			<li class="list-group-item text-muted" contenteditable="false">General Information</li>
			<li class="list-group-item text-right"><span class="pull-left"><strong class="">Email</strong></span> 2.13.2014</li>
			<li class="list-group-item text-right"><span class="pull-left"><strong class="">Telephone</strong></span> Yesterday</li>
			<li class="list-group-item text-right"><span class="pull-left"><strong class="">Address</strong></span> Joseph
				Doe</li>
			</li>
		</ul>
	</div>
</div>	



@endsection
