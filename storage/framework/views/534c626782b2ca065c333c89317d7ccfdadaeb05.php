<?php $__env->startSection('title', 'Welcome'); ?>

<?php $__env->startSection('content'); ?>
<!-- Button trigger modal -->
<!-- Modal -->
    <body>
      <br>
      <br>
      <br>
      <br>
      <div class="container">

         <section class="jumbotron text-center">
            <div class="container">
               <h1 class="jumbotron-heading">Share <?php echo e(Session::get('name')); ?></h1>
               <p class="lead texta-muted">Sebuah website untuk menampung beberapa project Fahrur Rozi</p>
               <p>
                  <a href="<?php echo e(url('/projects')); ?>" class="btn btn-primary">Cek Disini</a>
               </p>
                
            </div>
         </section>
      </div>

      <br>
      <br>
      <br>
      <br>
    </body>

   </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>