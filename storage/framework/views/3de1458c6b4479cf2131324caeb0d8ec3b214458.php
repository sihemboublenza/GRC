
<?php $__env->startSection('content'); ?>
<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <ol class="breadcrumb">
      <li class="breadcrumb-item">Tables</li>
      <li class="breadcrumb-item active" aria-current="page">Opportunités</li>
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
              <h4 class="text-center">Ajouter opportunite</h4>
              <form action="<?php echo e(url('opportunite/')); ?>" method="post">
                <?php echo csrf_field(); ?>

                <label for="floatingInput">Nom</label>
                <input type="text" name="nom_opp" class="form-control" id="floatingInput"><br>
                <label for="floatingInput2">Étape</label>
                <select name="etape" class="form-control">
                  <option value="Prospection">Prospection</option>
                  <option value="Proposition/Devis">Proposition/Devis</option>
                  <option value="Négociation/Vérification">Négociation/Vérification</option>
                  <option value="Cloturée/Gagnée">Cloturée/Gagnée</option>
                  <option value="Cloturée/Perdue">Cloturée/Perdue</option>
                </select><br>
                <label for="floatingInput3">Date de cloture</label>
                <input type="date" name="date_de_cloture" class="form-control" id="floatingInput5"><br>              
                <label for="floatingInput4">Client</label>
                <select class="form-control" id="floatingInput4" name="client">
                      <?php $__currentLoopData = $client; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($client->id); ?>"><?php echo e($client->societe); ?></option>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               </select><br>
                <br>
                <div class="col-md-12 text-center">
                  <input type="submit" value="Ajouter" class="btn btn-success col-5">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\GRC\resources\views/admin/opportunite/create.blade.php ENDPATH**/ ?>