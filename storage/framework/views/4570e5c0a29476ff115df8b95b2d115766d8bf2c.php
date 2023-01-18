
<?php $__env->startSection('content'); ?>
<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <ol class="breadcrumb">
      <li class="breadcrumb-item">Tables</li>
      <li class="breadcrumb-item active" aria-current="page">Rendez-vous</li>
    </ol>
  </div>

  <!-- Row -->
  <div class="row">
    <!-- Datatables -->
    <div class="col-lg-12">
      <div class="card mb-4">
        <div class="mb-4 form-floating">
          <div class="col-xl-6 offset-xl-3">
            <div class="text-box mt-5 mb-5">
              <h4 class="text-center">Ajouter rendez-vous</h4>
              <form action="<?php echo e(url('rdv/')); ?>" method="post">
                <?php echo csrf_field(); ?>

                <label for="floatingInput">Date</label>
                <input type="date" name="date" class="form-control" id="floatingInput"><br>
                <label for="floatingInput2">Heure</label>
                <input type="text" name="heure" class="form-control" id="floatingInput2"><br>
                <label for="floatingInput3">Compte rendu</label>
                <input type="text" name="etape" class="form-control" id="floatingInput3"><br>
                <br>
                <div class="col-md-12 text-center">
                  <input type="submit" value="Ajouter" class="btn btn-success">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\GRC\resources\views/admin/rdv/create.blade.php ENDPATH**/ ?>