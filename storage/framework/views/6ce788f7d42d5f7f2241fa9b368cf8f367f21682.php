   
 <?php $__env->startSection('content'); ?>



  <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Procpects</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item">Tables</li>
              <li class="breadcrumb-item active" aria-current="page">Procpects</li>
            </ol>
          </div>

          <!-- Row -->
          <div class="row">
            <!-- Datatables -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Procpects</h6>
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush" id="dataTable">
                    <thead class="thead-light">
                      <tr>
                        <th>Nome</th>
                        <th>Prénom</th>
                        <th>Société</th>
                        <th>Fonction</th>
                        <th>Email</th>
                        <th>Téléphone</th>
                        <th>Adresse</th>
                        <th>Site web</th>
                        <th>Statut</th>
                        <th>Source</th>
                      </tr>
                    </thead>
                    <tbody>
					<?php $__currentLoopData = $prospect; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr>
                        <td><?php echo e($p->nom_p); ?></td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>
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

          <!-- Documentation Link -->
        

          <!-- Modal Logout -->
          <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Are you sure you want to logout?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                  <a href="login.html" class="btn btn-primary">Logout</a>
                </div>
              </div>
            </div>
          </div>

        </div>
        <?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\GRC\resources\views/layout/prospect.blade.php ENDPATH**/ ?>