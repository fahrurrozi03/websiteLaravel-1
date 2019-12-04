@extends('admin.layout.app')
@section('title', 'Daftar Harga')

@section('content')
<div class="container-fluid">
	 <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Daftar Harga</h1>
          <p class="mb-4">menampilkan semua harga dan layanan yang kami sediakan</a>.</p>
          <div class="card shadow mb-4">
            <div class="card-header py-3">
				 <a href="{{route('addprice')}}" class="btn btn-info">
                    <span class="icon text-white-50">
                      <i class="fas fa-plus"></i>
                    </span>
                    <span class="text">Tambah layanan</span>
                  </a>

            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                  	@foreach($dataharga as $dthg)
                    <tr>
                      <th>ID</th>
                      <th>NAMA LAYANAN</th>
                      <th>MIN</th>
                      <th>MAX</th>
                      <th>HARGA/1K</th>
                      <th>KETERANGAN</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                    
                      <td><b>#{{$dthg->id}}</b></td>

                      <td><b>[LINE (OFF)]</b> #6 5000 {{$dthg->nama_layanan}}</td>
                      <td>{{$dthg->min}}</td>
                      <td>{{$dthg->max}}</td>
                      <td>{{$dthg->harga1k}}</td>
                      <td>{{$dthg->keterangan}}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
        <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
@endsection