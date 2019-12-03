@extends('layout.main')

@section('title', 'About')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-12">
			<h1 class="my-4">~ Project's</h1>
			@if(Auth::user())
			<a href="/adddata/create" class="btn btn-primary my-4">Add Data</a>
			@else
			@foreach ($data as $dt)
			<ul class="list-group">
  <li class="list-group-item d-flex justify-content-between align-items-center">
  	{{$dt->nama_project}}
  	    <a href="/details/{{$dt->id}}" class="badge badge-info">Detail</a>
  </li>
  @endforeach
</ul>
  	@endif
	</div>
	</div>
</div>
@endsection