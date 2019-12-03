@extends('layout.main')

@section('title', 'About')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-10">
			<h1 class="mt-4">Projects</h1>
			<table class="table">
				<thead class="thead-dark">
					<tr>
						<th scope="col">#</th>
						<th scope="col">Nama project</th>
						<th scope="col">Status</th>
						<th scope="col">Dibuat pada</th>
						<th scope="col">Aksi</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($myprojectt as $myp)
					<tr>
						<th scope="row">{{$loop->iteration}}</th>
						<td> {{$myp->nama}} </td>
						<td> {{$myp->status}} </td>
						<td> {{$myp->created_at}} </td>
						
						<td>
							<a href="" class="badge badge-success">edit</a>
							<a href="" class="badge badge-danger">delete</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection