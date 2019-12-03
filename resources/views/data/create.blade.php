@extends('layout.main')

@section('title', 'Form add data')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-12">
			<h1 class="my-5">Project Baru!</h1>
<form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="fsname">First Name</label>
      <input type="text" class="form-control" id="fsname">
    </div>
    <div class="form-group col-md-6">
      <label for="lsname">Last Name</label>
      <input type="text" class="form-control" id="lsname">
    </div>
  </div>
  <div class="form-group">
    <label for="name_project">Name Project</label>
    <input type="text" class="form-control" id="name_project">
  </div>
  <div class="form-group">
    <label for="about">About Project</label>
    <input type="text" class="form-control" id="about">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="sc">Source code</label>
      <input type="text" class="form-control" id="sc" placeholder="https://github.com/user">
    </div>
    <div class="form-group col-md-6">
      <label for="inputZip">Demo</label>
      <input type="text" class="form-control" id="inputZip">
    </div>
     <div class="form-group col-md-2">
      <label for="inputState">Access</label>
      <select id="inputState" class="form-control">
        <option>Public</option>
        <option>Private</option>
      </select>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>
	</div>
	</div>
</div>
@endsection