
<?php $__env->startSection('content'); ?>
<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <ol class="breadcrumb">
      <li class="breadcrumb-item">Tables</li>
      <li class="breadcrumb-item">Clients</li>
      <li class="breadcrumb-item" ><?php echo e($client->societe); ?></li>
      <li class="breadcrumb-item active" aria-current="page">Opportunités</li>
    </ol>
  </div>

  <!-- Row -->
  <div class="row">
    <!-- Datatables -->
    <div class="col-lg-12">
      <div class="card mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h4 class="m-0 font-weight-bold text-primary">Opportunités de la société <u><?php echo e($client->societe); ?></u></h4>
        </div>
        <div class="col-md-12 text-right">
          <a href="<?php echo e(url('/client/create')); ?>" class="btn btn-success col-2">Ajouter</a>
        </div>
        <div class="p-3 table-responsive">
          <table class="table" id="dataTable">
            <thead class="thead-light">
              <tr>
                <th>Nom</th>
                <th>Montant</th>
                <th>Étape</th>
                <th>Date de cloture</th>
                <th/>
                <th>Actions</th>
                <th/>
              </tr>
            </thead>
            <tbody>
            <tr>                      
	            <?php $__currentLoopData = $opp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
              <tr>
              <td><?php echo e($item->nom); ?></td>
              <td><?php echo e($item->montant); ?></td>
              <td><?php echo e($item->etape); ?></td>
              <td><?php echo e($item->date_de_cloture); ?></td>
              <td><a href="<?php echo e(url('/opportunite/' . $item->id)); ?>" class="btn btn-sm btn-primary">Détails</a></td>
              <td><a href="<?php echo e(url('/opportunite/' . $item->id . '/edit/')); ?>" class="btn btn-sm btn-warning">Modifier</a></td>
              <td><form method="POST" action="<?php echo e(url('/opportunite' . '/' . $item->id)); ?>" accept-charset="UTF-8" style="display:inline">
                      <?php echo e(method_field('DELETE')); ?>

                      <?php echo e(csrf_field()); ?>

                      <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm("Voulez-vous vraimenet supprimer ?")"><i class="fa fa-trash-o" aria-hidden="true"></i> Supprimer</button>
                  </form>
              </td>
              </tr>
	            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <!-- DataTable with Hover -->
   
  </div>
  <!--Row-->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\GRC\resources\views/admin/client/masteropportunite.blade.php ENDPATH**/ ?>