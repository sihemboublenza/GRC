
<?php $__env->startSection('contenu'); ?>


        <!-- Header -->
        <header class="ex-header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-10 offset-xl-1">
                        <h1 class="text-center">Log In</h1>
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </header> <!-- end of ex-header -->
        <!-- end of header -->
       
       
        
        <!-- Basic -->
        <div class="ex-form-1 pt-5 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 offset-xl-3">
                        <div class="text-box mt-5 mb-5">
                            <p class="mb-4">You don't have a password? Then please <a class="blue" href="<?php echo e(url('sign-up')); ?>">Sign Up</a></p>

                            <!-- Log In Form -->
                            <form action="<?php echo e(route('sample.validate_login')); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <div class="mb-4 form-floating">
                                    <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                                    <?php if($errors->has('email')): ?>
                                    <span class="text-danger"><?php echo e($errors->first('email')); ?> </span>
                                    <?php endif; ?>
                                    <label for="floatingInput">Email address</label>
                                </div>
                                <div class="mb-4 form-floating">
                                    <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                                    <?php if($errors->has('password')): ?>
                                    <span class="text-danger"><?php echo e($errors->first('password')); ?> </span>
                                    <?php endif; ?>
                                    <label for="floatingPassword">Password</label>
                                </div>
                                <div class="mb-4 form-check">
                                    <input type="checkbox" class="form-check-input" id="Check1">
                                    <label class="form-check-label" for="Check1">I agree with the site's stated <a href="<?php echo e(url('privacy')); ?>">Privacy Policy</a> and <a href="<?php echo e(url('terms')); ?>">Terms & Conditions</a></label>
                                </div>
                                <button type="submit" class="form-control-submit-button">Log in</button>
                            </form>
                            <!-- end of log in form -->

                        </div> <!-- end of text-box -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of ex-basic-1 -->
        <!-- end of basic -->


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\GRC\resources\views/log-in.blade.php ENDPATH**/ ?>