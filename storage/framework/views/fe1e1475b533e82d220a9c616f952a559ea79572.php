<?php $__env->startSection('title', 'Detail data'); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
	<div class="row">
		<div class="col-6">
			<h1 class="my-4">Detail Project </h1>
<div class="card">
  <div class="card-body">
    <h5 class="card-title">By <?php echo e($data->nama); ?></h5>
    <h6 class="card-subtitle mb-2 text-muted"><?php echo e($data->nama_project); ?></h6>
    <p class="card-text"><?php echo e($data->about); ?></p>
    	<a href="<?php echo e($data->id); ?>/edit"class="btn btn-primary">Edit</a>
		<form action="<?php echo e($data->id); ?>" method="post" class="d-inline">
			<?php echo method_field('delete'); ?>
			<?php echo csrf_field(); ?>
    	<button type="submit" class="btn btn-danger">Delete</button>
		</form>
    <a href="/adddata" class="card-link">Back</a>
  </div>
</div>
	</div>
	</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>