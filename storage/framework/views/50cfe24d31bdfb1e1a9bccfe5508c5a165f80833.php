<?php $__env->startSection('title', 'About'); ?>

<?php $__env->startSection('content'); ?>
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
					<?php $__currentLoopData = $myprojectt; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $myp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr>
						<th scope="row"><?php echo e($loop->iteration); ?></th>
						<td> <?php echo e($myp->nama); ?> </td>
						<td> <?php echo e($myp->status); ?> </td>
						<td> <?php echo e($myp->created_at); ?> </td>
						
						<td>
							<a href="" class="badge badge-success">edit</a>
							<a href="" class="badge badge-danger">delete</a>
						</td>
					</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>