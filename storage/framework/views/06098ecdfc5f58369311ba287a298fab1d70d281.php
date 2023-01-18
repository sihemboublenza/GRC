
<?php $__env->startSection('content'); ?>
        <!-- Header -->
        <header class="ex-header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-10 offset-xl-1">
                        <h1 class="text-center">Products</h1>
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </header> <!-- end of ex-header -->
        <!-- end of header -->

        <div id="features" class="cards-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                    <?php $__currentLoopData = $produits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <!-- Card -->
                        <div class="card">
                            <div class="card-icon">
                                <img src="<?php echo e(asset('$item->photo')); ?>" data-image-width="500" data-image-height="333"/>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title"><?php echo e($item->nom); ?></h4>
                                <p><?php echo e($item->description); ?></p>
                            </div>
                        </div>
                        <!-- end of card -->
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of cards-1 -->


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.public.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\GRC\resources\views/products.blade.php ENDPATH**/ ?>