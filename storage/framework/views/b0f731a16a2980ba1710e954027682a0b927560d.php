  
 <?php $__env->startSection('content'); ?>

        <link href="<?php echo e(url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;1,400&display=swap')); ?>" rel="stylesheet">
        <link href="<?php echo e(url('css/bootstrap.min.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(url('css/fontawesome-all.min.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(url('css/swiper.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(url('css/styles.css')); ?>" rel="stylesheet">
        <center><h3>login form</h3></center>
<form>
                                <div class="mb-4 form-floating">
                                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                                    <label for="floatingInput">Email address</label>
                                </div>
                                <div class="mb-4 form-floating">
                                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                                    <label for="floatingPassword">Password</label>
                                </div>
                                <div class="mb-4 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">I agree with the site's stated <a href="<?php echo e(url('privacy')); ?>">Privacy Policy</a> and <a href="<?php echo e(url('terms')); ?>">Terms & Conditions</a></label>
                                </div>
                                <button type="submit" class="form-control-submit-button">Log in</button>
                            </form>
                            <?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\GRC\resources\views/layout/login.blade.php ENDPATH**/ ?>