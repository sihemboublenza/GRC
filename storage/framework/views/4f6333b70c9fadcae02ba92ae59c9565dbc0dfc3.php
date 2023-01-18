
        <!-- Header -->
        <header class="ex-header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-10 offset-xl-1">
                        <h1 class="text-center">Contact us</h1>
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
                            <!-- Sign Up Form -->
                            <form action="<?php echo e(route('prospect.contacted')); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <div class="mb-4 form-floating">
                                    <input type="email" class="form-control" name="email" id="floatingInput">
                                    <?php if($errors->has('email')): ?>
                                    <span class="text-danger"><?php echo e($errors->first('email')); ?> </span>
                                    <?php endif; ?>
                                    <label for="floatingInput">Email address</label>
                                </div>
                                <div class="mb-4 form-floating">
                                    <input type="text" class="form-control" name="nom" id="floatingInput">
                                    <?php if($errors->has('nom')): ?>
                                    <span class="text-danger"><?php echo e($errors->first('nom')); ?> </span>
                                    <?php endif; ?>
                                    <label for="floatingInput">First name</label>
                                </div>
                                <div class="mb-4 form-floating">
                                    <input type="text" class="form-control" name="prenom" id="floatingInput">
                                    <?php if($errors->has('prenom')): ?>
                                    <span class="text-danger"><?php echo e($errors->first('prenom')); ?> </span>
                                    <?php endif; ?>
                                    <label for="floatingInput">Last name</label>
                                </div>
                                <div class="mb-4 form-floating">
                                    <input type="text" class="form-control" name="societe" id="floatingInputCompany">
                                    <?php if($errors->has('societe')): ?>
                                    <span class="text-danger"><?php echo e($errors->first('societe')); ?> </span>
                                    <?php endif; ?>
                                    <label for="floatingInputCompany">Company</label>
                                </div>
                                <div class="mb-4 form-floating">
                                    <input type="text" class="form-control" name="fonction" id="floatingInputFunction">
                                    <?php if($errors->has('fonction')): ?>
                                    <span class="text-danger"><?php echo e($errors->first('fonction')); ?> </span>
                                    <?php endif; ?>
                                    <label for="floatingInputFunction">Last name</label>
                                </div>
                                <div class="mb-4 form-floating">
                                    <input type="text" class="form-control" name="tel" id="floatingInputTel">
                                    <?php if($errors->has('tel')): ?>
                                    <span class="text-danger"><?php echo e($errors->first('tel')); ?> </span>
                                    <?php endif; ?>
                                    <label for="floatingInputTel">Phone number</label>
                                </div>
                                
                                <div class="mb-4 form-floating">
                                    
                                </div>
                                <div class="mb-4 form-check">
                                    <input type="checkbox" class="form-check-input" id="heck1">
                                    <label class="form-check-label" for="Check1">I agree with the site's stated <a href="<?php echo e(url('terms')); ?>">Terms & Conditions</a></label>
                                </div>
                                <button type="submit" class="form-control-submit-button">Sign up</button>
                            </form>
                            <!-- end of sign up form -->
                        </div> <!-- end of text-box -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of ex-basic-1 -->
        <!-- end of basic -->
<?php echo $__env->make('layout.public.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\GRC\resources\views/signup.blade.php ENDPATH**/ ?>