
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
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h4 class="m-0 font-weight-bold text-primary">Contacts</h4>
        </div>
        <div class="col-md-12 text-right">
          <a href="" class="btn btn-success">Ajouter</a>
        </div>
        <div class="p-3 table-responsive">
          <table class="table" id="dataTable">
            <thead class="thead-light">
              <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Fonction</th>
                <th>Client</th>
                <th>Actions</th>
                <th/>
              </tr>
            </thead>
            <tbody>
            <tr>                      
	            
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <!-- DataTable with Hover -->
   
  </div>
  <!--Row-->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('mastercontact', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\GRC\resources\views//contact/list.blade.php ENDPATH**/ ?>