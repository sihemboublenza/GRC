
<?php $__env->startSection('content'); ?>
<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <ol class="breadcrumb">
      <li class="breadcrumb-item">Tables</li>
      <li class="breadcrumb-item active" aria-current="page">Contacts</li>
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
              <h4 class="text-center">Modifier contact</h4>
              <form action="<?php echo e(url('contact/' . $contacts->id)); ?>" method="post">
                <?php echo csrf_field(); ?>

                <?php echo method_field("PATCH"); ?>
                <label for="floatingInput">Nom</label>
                <input type="text" name="nom" class="form-control" value="<?php echo e($contacts->nom); ?>" id="floatingInput"><br>
                <label for="floatingInput2">Prénom</label>
                <input type="text" name="prenom" class="form-control" value="<?php echo e($contacts->prenom); ?>" id="floatingInput2"><br>
                <label for="floatingInput3">Fonction</label>
                <input type="text" name="fonction" class="form-control" value="<?php echo e($contacts->fonction); ?>" id="floatingInput3"><br>
                <label for="floatingInput4">Adresse email</label>
                <input type="email" name="email" class="form-control" value="<?php echo e($contacts->email); ?>" id="floatingInput4"><br>
                <label for="floatingInput6">Téléphone</label>
                <input type="tel" name="tel" class="form-control" value="<?php echo e($contacts->tel); ?>" id="floatingInput6"><br>
                <img src="../resources/images/<?php echo e($contacts->photo); ?>">
                <br>
                <div class="col-md-12 text-center">
                  <input type="submit" value="Modifier" class="btn btn-warning">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\GRC\resources\views/admin/contact/edit.blade.php ENDPATH**/ ?>