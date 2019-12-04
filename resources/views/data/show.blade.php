@extends('layout.main')

@section('title', 'Detail data')

@section('content')
@dump($data->nama)
<div class="container">
	<div class="row">
		<div class="col-6">
			<h1 class="my-4">Detail Project </h1>
<div class="card">
  <div class="card-body">
    <h5 class="card-title">By {{$data->nama}}</h5>
    <h6 class="card-subtitle mb-2 text-muted">{{$data->nama_project}}</h6>
    <p class="card-text">{{$data->about}}</p>
    	<a href="{{$data->id}}/edit"class="btn btn-primary">Edit</a>
		<form action="{{$data->id}}" method="post" class="d-inline">
			@method('delete')
			@csrf
    	<button type="submit" class="btn btn-danger">Delete</button>
		</form>
    <a href="/adddata" class="card-link">Back</a>
  </div>
</div>
	</div>
	</div>
</div>
@endsection
