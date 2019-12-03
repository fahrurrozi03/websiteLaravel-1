<form class="form" method="post" action="" role="form">
	<input type="hidden" name = "_token" value=" <?php echo e(csrf_token()); ?> ">
	<div class="form-group">
		<p>Nama : <input type="text" name="nama"></input> </p>
		<p>Kelas : <input type="text" name="kelas"></input> </p>
		<p>Alamat : <input type="text" name="alamat"></input> </p>
	</div>
	<div class="form-group">
		<button type="submit" name="comment" class="btn btn-primary">Upload !</button>
	</div>

</form>