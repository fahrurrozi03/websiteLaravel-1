@extends('admin.layout.app')
@section('title', 'Daftar Harga')

@section('content')
<div class="container-fluid">
	 <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Daftar Harga</h1>
          <p class="mb-4">menampilkan semua harga dan layanan yang kami sediakan</a>.</p>
          <div class="card shadow mb-4">
            <div class="card-header py-3">
            				@if (session('status'))
	<div class="alert alert-success">
			{{ session('status') }}
	</div>
@endif
            	
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
                    	@foreach($dataharga as $dthg)
                    	<?php
							$kalimat = $dthg->sosmed;
							$kalimat_new = strtoupper($kalimat);
							?>
                      <td><b>#{{$dthg->id}}</b></td>

                      <td><b>[{{$kalimat_new}}]</b> {{$dthg->nama_layanan}}</td>
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
  <div class="modal fade" id="bukanAdmin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Alert</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Anda menggunakan akun DEMO tidak bisa tambah layanan</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div>
  </div>
@endsection