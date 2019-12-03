@extends('layout.main')

@section('title', 'Detail data')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-12">
			<h1 class="my-4">Detail Project </h1>
<div class="card">
	<a href="/">
  <div class="card-body">
    <h5 class="card-title">By {{$data->nama}}</h5>
    <h6 class="card-subtitle mb-2 text-muted">{{$data->nama_project}}</h6>
    <p class="card-text">{{$data->about}}</p>
</a>
    @if(Auth::user())
    <button type="submit" class="btn btn-primary">Edit</button>
    <button type="submit" class="btn btn-danger">Delete</button>
    @else
    <a href="/adddata" class="card-link">Back</a>
    @endif
  </div>
</div>
	</div>
	</div>
</div>
@endsection