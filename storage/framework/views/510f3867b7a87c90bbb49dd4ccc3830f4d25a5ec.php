
<?php $__env->startSection('content'); ?>

<div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Oportunités</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item">Tables</li>
              <li class="breadcrumb-item active" aria-current="page">Oportunités</li>
            </ol>
          </div>

          <!-- Row -->
          <div class="row">
            <!-- Datatables -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <?php $__currentLoopData = $client; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><h6 class="m-0 font-weight-bold text-primary">Oportunités de " <?php echo e($client->societe); ?> " </h6> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="table-responsive p-3">
               
                  <table class="table align-items-center table-flush" id="dataTable">
                    <thead class="thead-light">
                      <tr>
                        <th>Nom</th>
                        <th>Montant</th>
                        <th>Etape</th>
                        <th>Date de cloture</th>
                        <th>Action</th>
                        <th/>
                        <th/>
                        <th/>
                      </tr>
                    </thead>
                   
                    <tbody>
                     
                      <?php $__currentLoopData = $opportunite; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $opportunite): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr>
                      <td><?php echo e($opportunite->nom_opp); ?></td>
                      <td><?php echo e($opportunite->montant); ?> DA</td>
                      <td><?php echo e($opportunite->etape); ?></td>
                      <td><?php echo e($opportunite->date_de_cloture); ?></td>
                      <td><a href="<?php echo e(route('contact.viewFacture', $opportunite->nom_opp)); ?>" class="btn btn-sm btn-primary">Détails</a></td>
                     
                      </tr>
					            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('mastercontact', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\GRC\resources\views//contacts/opportunites.blade.php ENDPATH**/ ?>