<?php $__env->startSection('title', 'About'); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
	<div class="row">
		<div class="col-4">
			<h1 class="mt-4">Hello, <?php echo e($namaku); ?> </h1>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>