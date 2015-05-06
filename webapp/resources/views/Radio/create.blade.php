@extends('layout.admin')

@section('content')
<form class="form-horizontal">
<fieldset>
<!-- Form Name -->
<legend>Radio Profile</legend>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="name">Name</label>
  <div class="controls">
    <input id="name" name="name" type="text" placeholder="" class="input-xlarge" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="slogan">Slogan</label>
  <div class="controls">
    <input id="slogan" name="slogan" type="text" placeholder="" class="input-xlarge">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="email">Email</label>
  <div class="controls">
    <input id="email" name="email" type="text" placeholder="" class="input-xlarge" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="address">Address</label>
  <div class="controls">
    <input id="address" name="address" type="text" placeholder="" class="input-xlarge">
    
  </div>
</div>

<!-- File Button --> 
<div class="control-group">
  <label class="control-label" for="logo">Logo image</label>
  <div class="controls">
    <input id="logo" name="logo" class="input-file" type="file">
  </div>
</div>

<!-- Button (Double) -->
<div class="control-group">
  <label class="control-label" for="save"></label>
  <div class="controls">
    <button id="save" name="save" class="btn btn-success">Save</button>
    <button id="cancel" name="cancel" class="btn btn-danger">Cancel</button>
  </div>
</div>

</fieldset>
</form>
@endsection