@extends('app')
@section('return')
<ul class="nav navbar-nav">
  <li><a href="{{ url("/radio/$radio->id") }}">My Radio</a></li>
</ul>
@endsection
@section('content')
<div class="container">
  <div class="row">
    <div class="col-sm-12">
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
      <form enctype="multipart/form-data" method="POST" action="/radio/{{$radio->id}}">

        <div class="col-sm-3">
          <div class="row">
            <img class="img-rounded img-responsive" src="{{$radio->logo_url}}">
          </div>
          <div class="row">
            <div>
              <h4>Change Logo</h4><input type="file" name="image">
            </div>
          </div>

        </div>

        <input type="hidden" name="_token" value={{csrf_token()}}>
        <input type="hidden" name="_method" value="PUT">
        <div class="col-sm-9">
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label>Name:</label> <input type="text" class="form-control" value="{{$radio->name}}" name="name">
              </div>
              <div class="form-group">
                <label>Slogan:</label> <input type="text" class="form-control" value="{{$radio->slogan}}" name="slogan">
              </div>
              <div class="form-group">
                <label>Address:</label> <input type="text" class="form-control" value="{{$radio->address}}" name="address">
              </div>
              <div class="form-group">
                <label>Streaming URL:</label> <input type="text" class="form-control" value="{{$radio->streaming_url}}" name="streaming_url">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label>Facebook:</label> <input type="text" class="form-control" value="{{$radio->facebook}}" name="facebook">
              </div>
              <div class="form-group">
                <label>Twitter:</label> <input type="text" class="form-control" value="{{$radio->twitter}}" name="twitter">
              </div>
              <div class="form-group">
                <label>Youtube:</label> <input type="text" class="form-control" value="{{$radio->youtube}}" name="youtube">
              </div>
              <div class="form-group">
                <label>Instagram:</label> <input type="text" class="form-control" value="{{$radio->instagram}}" name="instagram">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label>Email:</label> <input type="text" class="form-control" value="{{$radio->email}}" name="email">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label>Phone:</label> <input type="text" class="form-control" value="{{$radio->telephone}}"name="phone">
              </div>
            </div>
          </div>

          <div class="form-group">
            <button class="btn btn-success" type="submit"><i class="fa fa-check "></i> SAVE CHANGES </button>
            <a class="btn btn-danger" href="/radio/{{$radio->id}}"><i class="fa fa-close "></i> CANCEL</a>
          </div>  
        </div>


      </form>
    </div>
  </div>
</div>

@endsection
