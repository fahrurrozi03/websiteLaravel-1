@extends('layout.main')

@section('title', 'About')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-8">
			<h1 class="my-4">~ Project's</h1>

			<a href="/adddata/create" class="btn btn-primary my-2">Add Data</a>
			@if (session('status'))
	<div class="alert alert-success">
			{{ session('status') }}
	</div>
@endif
			@foreach ($data as $dt)
			<ul class="list-group">
  <li class="list-group-item d-flex justify-content-between align-items-center">
  	{{$dt->nama_project}}
  	    <a href="{{url('/details/')}}/{{$dt->id}}" class="badge badge-info">Detail</a>
  </li>
  @endforeach
</ul>

	</div>
	</div>
</div>
@endsection
