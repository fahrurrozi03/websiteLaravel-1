<?php $__env->startSection('title', 'About'); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
	<div class="row">
		<div class="col-12">
			<h1 class="my-4">~ Project's</h1>
			<?php if(Auth::user()): ?>
			<a href="/adddata/create" class="btn btn-primary my-4">Add Data</a>
			<?php else: ?>
			<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<ul class="list-group">
  <li class="list-group-item d-flex justify-content-between align-items-center">
  	<?php echo e($dt->nama_project); ?>

  	    <a href="/details/<?php echo e($dt->id); ?>" class="badge badge-info">Detail</a>
  </li>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
  	<?php endif; ?>
	</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>