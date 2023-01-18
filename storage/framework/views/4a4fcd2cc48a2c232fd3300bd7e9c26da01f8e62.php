
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
              <h4 class="text-center">Détails contact</h4>
                <label for="floatingInput">Nom</label>
                <input type="text" name="nom" class="form-control" value="<?php echo e($contacts->nom); ?>" id="floatingInput" disabled><br>
                <label for="floatingInput2">Prénom</label>
                <input type="text" name="prenom" class="form-control" value="<?php echo e($contacts->prenom); ?>" id="floatingInput2" disabled><br>
                <label for="floatingInput3">Fonction</label>
                <input type="text" name="societe" class="form-control" value="<?php echo e($contacts->fonction); ?>" id="floatingInput3" disabled><br>
                <label for="floatingInput4">Adresse email</label>
                <input type="email" name="email" class="form-control" value="<?php echo e($contacts->email); ?>" id="floatingInput4" disabled><br>
                <label for="floatingInput4">Mot de passe</label>
                <input type="password" name="password" class="form-control" value="<?php echo e($contacts->password); ?>" id="floatingInput4" disabled><br>
                <label for="floatingInput5">Téléphone</label>
                <input type="tel" name="tel" class="form-control" value="<?php echo e($contacts->tel); ?>" id="floatingInput5" disabled><br>
                 <label for="floatingInput4">Client</label>
                <select class="form-control" id="floatingInput5" name="client">
                <img src="../resources/images/<?php echo e($contacts->source); ?>"><br>
                <br>
            </div>
          </div>
        </div>
      </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\GRC\resources\views/admin/contact/show.blade.php ENDPATH**/ ?>