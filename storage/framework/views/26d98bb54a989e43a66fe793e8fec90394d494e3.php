<?php $__env->startSection('title', 'Form add data'); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
	<div class="row">
		<div class="col-6">
			<h1 class="my-5">Project Baru!</h1>
<form method="post" action="/addData">
	<?php echo csrf_field(); ?>
    <div class="form-group">
      <label for="fsname">Your Name</label>
      <input type="text" class="form-control" id="fsname" name="nama" required>
		</div>
  <div class="form-group">
    <label for="name_project">Name Project</label>
    <input type="text" class="form-control" id="name_project" name="nama_project" required>
  </div>
  <div class="form-group">
    <label for="about">About Project</label>
    <input type="text" class="form-control" id="about" name="about" required>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="sc">Source code</label>
      <input type="text" class="form-control" id="sc" placeholder="https://github.com/user" name="sc" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputZip">Demo</label>
      <input type="text" class="form-control" id="inputZip" name="demo" required>
    </div>
     <div class="form-group col-md-2">
      <label for="inputState">Access</label>
      <select id="inputState" class="form-control" name="access">
        <option>Public</option>
        <option>Private</option>
      </select>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Add Data</button>
</form>
	</div>
	</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>