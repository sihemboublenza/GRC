<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="image/logo/favicon.png" rel="icon">
  <title>Contacte</title>
  <link href="<?php echo e(asset('vendor/fontawesome-free/css/all.min.css')); ?>" rel="stylesheet" type="text/css">
  <link href="<?php echo e(asset('vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet" type="text/css">
  <link href="<?php echo e(asset('css/ruang-admin.min.css')); ?>" rel="stylesheet">
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
   <?php echo $__env->make('layout.contact.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
   <?php echo $__env->make('layout.contact.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Topbar -->

        <!-- Container Fluid-->
       <?php echo $__env->yieldContent('content'); ?>
        <!---Container Fluid-->
      </div>
      <!-- Footer -->
      <?php echo $__env->make('layout.contact.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- Footer -->
    </div>
    
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="<?php echo e(asset('vendor/jquery/jquery.min.js')); ?>"></script>
  <script src="<?php echo e(asset('vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
  <script src="<?php echo e(asset('vendor/jquery-easing/jquery.easing.min.js')); ?>"></script>
  <script src="<?php echo e(asset('js/ruang-admin.min.js')); ?>"></script>
  <script src="<?php echo e(asset('vendor/chart.js/Chart.min.js')); ?>"></script>
  <script src="<?php echo e(asset('js/demo/chart-area-demo.js')); ?>"></script>  
</body>

</html><?php /**PATH C:\laragon\www\GRC\resources\views/mastercontact.blade.php ENDPATH**/ ?>