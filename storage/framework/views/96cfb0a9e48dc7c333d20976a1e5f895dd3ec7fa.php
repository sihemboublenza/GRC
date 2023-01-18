
<?php $__env->startSection('content'); ?>
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
            <?php if($message = Session::get('success')): ?>
            <div class="center col-3 alert alert-info">
                <?php echo e($message); ?>

            </div>
            <?php endif; ?>
            <div class="container">
                <div class="row">
                    <div class=" col-xl-6 offset-xl-3">
                        <div class="text-box mt-5 mb-5">
                            <p class="mb-4">You don't have an account ? Then please <a class="blue" href="<?php echo e(url('signup')); ?>">contact us</a></p>

                            <!-- Log In Form -->
                            <form action="<?php echo e(route('authenticate.validate_login')); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <div class="mb-4 form-floating">
                                    <input type="email" name="email" class="form-control" id="floatingInput">
                                    <?php if($errors->has('email')): ?>
                                    <span class="text-danger"><?php echo e($errors->first('email')); ?> </span>
                                    <?php endif; ?>
                                    <label for="floatingInput">Email address</label>
                                </div>
                                <div class="mb-4 form-floating">
                                    <input type="password" name="password" class="form-control" id="floatingPassword">
                                    <?php if($errors->has('password')): ?>
                                    <span class="text-danger"><?php echo e($errors->first('password')); ?> </span>
                                    <?php endif; ?>
                                    <label for="floatingPassword">Password</label>
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
<?php echo $__env->make('layout.public.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\GRC\resources\views/login.blade.php ENDPATH**/ ?>