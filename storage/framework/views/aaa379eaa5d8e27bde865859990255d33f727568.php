
<?php $__env->startSection('content'); ?>
<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <ol class="breadcrumb">
      <li class="breadcrumb-item">Tables</li>
      <li class="breadcrumb-item">Clients</li>
      <li class="breadcrumb-item active" aria-current="page"><?php echo e($clients->societe); ?></li>
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
              <h4 class="text-center">Détails client</h4>
              <label for="floatingInput">Société</label>
                <input type="text" name="societe" class="form-control" value="<?php echo e($clients->societe); ?>" id="floatingInput" disabled><br>
                <label for="floatingInput2">Téléhphone</label>
                <input type="tel" name="tel" class="form-control" value="<?php echo e($clients->tel); ?>" id="floatingInput2" disabled><br>
                <label for="floatingInput3">Adresse</label>
                <input type="text" name="adresse" class="form-control" value="<?php echo e($clients->adresse); ?>" id="floatingInput3" disabled><br>
                <label for="floatingInput4">Site Web</label>
                <input type="email" name="siteweb" class="form-control" value="<?php echo e($clients->siteweb); ?>" id="floatingInput4" disabled><br>
                <br>
                <div class="col-md-12 text-center">
                  <a href="<?php echo e(url('/client/' . $clients->id . '/mastercontact/')); ?>" class="btn btn-sm btn-primary col-3">Contacts liés</a>
                  <a href="<?php echo e(url('/client/' . $clients->id . '/masteropportunite/')); ?>" class="btn btn-sm btn-primary col-3">Opportunités liées</a>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\GRC\resources\views/admin/client/show.blade.php ENDPATH**/ ?>