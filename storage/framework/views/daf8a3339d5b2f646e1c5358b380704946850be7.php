
<?php $__env->startSection('content'); ?>
<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <ol class="breadcrumb">
      <li class="breadcrumb-item">Tables</li>
      <li class="breadcrumb-item">Opportunités</li>
      <li class="breadcrumb-item" ><?php echo e($opp->nom_opp); ?></li>
      <li class="breadcrumb-item active" aria-current="page">Produits</li>
    </ol>
  </div>

  <!-- Row -->
  <div class="row">
    <!-- Datatables -->
    <div class="col-lg-12">
      <div class="card mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h4 class="m-0 font-weight-bold text-primary">Produits de l'opportunité <u><?php echo e($opp->nom_opp); ?></u></h4>
        </div>
        <div class="col-md-12 text-right">
          <a href="<?php echo e(url('/opportunite/'.$opp->id.'/masterproduit/create/')); ?>" class="btn btn-success col-2">Ajouter</a>
        </div>
        <div class="p-3 table-responsive">
          <table class="table" id="dataTable">
            <thead class="thead-light">
              <tr>
                <th></th>
                <th>Produit</th>
                <th>Prix unitaire</th>
                <th>Quantité</th>
                <th>Actions</th>
                <th/>
              </tr>
            </thead>
            <tbody>
            <tr>
	            <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
              <tr>
              <td><img src="<?php echo e($item->photo); ?>"/></td>
              <td><?php echo e($item->nom); ?></td>
              <td><?php echo e($item->prix); ?></td>
              <td><?php echo e($item->qte); ?></td>
              <td><a href="<?php echo e(url('/produit/' . $item->id)); ?>" class="btn btn-sm btn-primary">Détails</a></td>
              <td><form method="POST" action="<?php echo e(url('/opportunite/produits' . '/' . $item->id)); ?>" accept-charset="UTF-8" style="display:inline">
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
<?php echo $__env->make('layout.admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\GRC\resources\views/admin/opportunite/masterproduit.blade.php ENDPATH**/ ?>