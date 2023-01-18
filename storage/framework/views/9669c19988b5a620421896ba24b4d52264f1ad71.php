
<?php $__env->startSection('content'); ?>

<section class="vh-50" style="background-color: #f4f5f7;">
  <!--<div class="container py-5 h-100">-->
    <div class="row d-flex justify-content-center align-items-center h-90">
      <div class="col col-lg-9 mb-4 mb-lg-0">
        <div class="card mb-3" style="border-radius: .5rem;">
          <?php $__currentLoopData = $client; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="row g-0">
            <div class="col-md-4 gradient-custom text-center text-white"
              style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
            <br> <br> <h2 style="font-weight : bold; font-style: italic;">Client :</h2>

              <h3><?php echo e($client->societe); ?></h3>
             <!-- <p>Web Designer</p>-->
            
            </div>
            <div class="col-md-8">
              <div class="card-body p-4">
                <h5 style="font-weight : bold; font-style: italic;">Information</h5>
                <hr class="mt-0 mb-4">
                
                <div class="row pt-1">
                  <!--<div class="col-6 mb-3">
                    <h6>Societe</h6>
                    <p class="text-muted"><?php echo e($client->societe); ?></p>
                  </div>-->
                  <div class="col-4 mb-1">
                    <h6>Phone</h6>
                    <p class="text-muted"><?php echo e($client->tel); ?></p>
                  </div>
                  <div class="col-4 mb-1">
                    <h6>Adresse</h6>
                    <p class="text-muted"><?php echo e($client->adresse); ?></p>
                  </div>
                  <div class="col-4 mb-1">
                    <h6>Site web </h6>
                    <p class="text-muted"><?php echo e($client->siteweb); ?></p>
                  </div>
                </div>
               
                  
                </div>
                
               
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <!--</div>-->
</section>
<style>
  .gradient-custom {
/* fallback for old browsers */
background: #f6d365;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right bottom, rgba(246, 211, 101, 1), rgba(253, 160, 133, 1));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right bottom, rgba(246, 211, 101, 1), rgba(253, 160, 133, 1))
}
</style>

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
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h4 class="m-0 font-weight-bold text-primary">Contacts</h4>
        </div>
        
        <div class="p-3 table-responsive">
          <table class="table" id="dataTable">
            <thead class="thead-light">
              <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>

                <th>Fonction</th>
                <th>Téléphone</th>

                <th>Actions</th>
                <th/>
              </tr>
            </thead>
            <tbody>
            <tr>                      
	            <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              
              <tr>
              <td><?php echo e($item->nom); ?></td>
              <td><?php echo e($item->prenom); ?></td>
              <td><?php echo e($item->email); ?></td>

              <td><?php echo e($item->fonction); ?></td>
              <td><?php echo e($item->tel); ?></td>



              <td><a href="<?php echo e(url('/contact/' . $item->id . '/edit/')); ?>" class="btn btn-sm btn-warning">Modifier</a></td>
             
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
<?php echo $__env->make('mastercontact', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\GRC\resources\views//contacts/contacts.blade.php ENDPATH**/ ?>