
<?php $__env->startSection('content'); ?>
<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <ol class="breadcrumb">
      <li class="breadcrumb-item">Tables</li>
      <li class="breadcrumb-item active" aria-current="page">Clients</li>
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
              <h4 class="text-center">Ajouter client</h4>
              <form action="<?php echo e(url('client/')); ?>" method="post">
                <?php echo csrf_field(); ?>

                <label for="floatingInput">Société</label>
                <input type="text" name="societe" class="form-control" id="floatingInput"><br>
                <label for="floatingInput2">Téléphone</label>
                <input type="tel" name="tel" class="form-control" id="floatingInput2"><br>
                <label for="floatingInput3">Adresse</label>
                <input type="text" name="adresse" class="form-control" id="floatingInput3"><br>
                <label for="floatingInput4">Site Web</label>
                <input type="text" name="siteweb" class="form-control" id="floatingInput4"><br>
                <br>
                <div class="col-md-12 text-center">
                  <input type="submit" value="Ajouter" class="btn btn-success col-6">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\GRC\resources\views/admin/client/create.blade.php ENDPATH**/ ?>