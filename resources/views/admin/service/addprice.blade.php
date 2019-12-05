@extends('admin.layout.app')
@section('title', 'Tambah Layanan')

@section('content')
<div class="container-fluid">
   <h1 class="h3 mb-2 text-gray-800">Tambah Layanan</h1>
          <p class="mb-4">Menambah layanan sosial media</a>.</p>
         	@if(Auth::user()->name == 'demo')
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
          	Berhubung anda menggunakan akun <strong>DEMO</strong>, anda tidak bisa menggunakan fitur ini
  				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
   				 <span aria-hidden="true">&times;</span>
  				</button>
  			</div>
  			@endif
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
          <div class="card shadow mb-4 border-bottom-info">
            <div class="card-header py-3">
            	<form method="post" action="{{url('/admin/add')}}">
            		@csrf
            		<div class="card-header py-3 d-flex">
            			<div class="col-auto">
                      <i class="fas fa-clipboard-list fa-1x text-gray-300"></i>
                    </div>
                  <h6 class="m-0 font-weight-bold text-gray-500">Formulir Tambah Layanan</h6></div>
    <div class="form-group row">
  	    <label for="sosmed" class="col-sm-2 col-form-label">Sosial Media</label>
    	<div class="col-sm-10">
    	<select class="custom-select" name="sosmed">
 		 <option selected> - Pilih Sosial Media</option>
 		 <option value="Facebook">Facebook</option>
 		 <option value="Instragram">Instragram</option>
  		 <option value="Twitter">Twitter</option>
  		 <option value="Youtube">Youtube</option>
  		 <option value="Pinterest">Pinterest</option>
		</select>
		</div>
	</div>

  <div class="form-group row">
    <label for="inputlayanan" class="col-sm-2 col-form-label">Nama Layanan</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputlayanan" name="nama_layanan" required>
    </div>
  </div>
    <div class="form-group row">
    	 <label for="inputlayanan" class="col-sm-2 col-form-label" required>Harga per 1000</label>
       <div class="col-sm-10">
   <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">Rp.</div>
        </div>
        <input type="text" class="form-control" name="harga1k" id="inputlayanan" required>
      </div>
  </div>
</div>
  <div class="form-group row">
    <label for="mix" class="col-sm-2 col-form-label">Min Order</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="mix" name="min" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="max" class="col-sm-2 col-form-label">Max Order</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="max" name="max" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Keterangan</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword3" name="keterangan" required>
    </div>
  </div>
  @if(Auth::user()->name == 'demo')
   <div class="form-group row">
    <div class="col-sm-10 my-3">
	 <button type="submit" class="btn btn-info" id="button-dsbl" data-toggle="modal" data-target="#bukanAdmin" >
     </span>
     <span class="text">Tambah</span>
     </button>
 </div>
</div>
  @else
  <div class="form-group row">
    <div class="col-sm-10 my-3">
      <button type="submit" class="btn btn-info">Tambah</button>
    </div>
  </div>
   @endif
</form>
</div>
</div>
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
@endsection('content')
