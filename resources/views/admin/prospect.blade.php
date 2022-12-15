   @extends('master')
 @section('content')



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
                <div class="p-3">
                  <table class="table table-responsive overflow-auto" id="dataTable">
                    <thead class="thead-light">
                      <tr>
                        <th>Nome</th>
                        <th>Prénom</th>
                        <th>Société</th>
                        <th>Fonction</th>
                        <th>Email</th>
                        <th>Téléphone</th>
                        <th>Statut</th>
                        <th/>
                        <th/>
                        <th/>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                      <a href="" class="btn btn-success">ADD</a>
					@foreach($prospects as $prospect)
                      <tr>
                      <td>{{$prospect->nom_p}}</td>
                      <td>{{$prospect->prenom_p}}</td>
                      <td>{{$prospect->societe_p}}</td>
                      <td>{{$prospect->fonction_p}}</td>
                      <td>{{$prospect->email_p}}</td>
                      <td>{{$prospect->tel_p}}</td>
                      <td>{{$prospect->statut}}</td>
                      <td><a href="" class="btn btn-sm btn-primary">SHOW</a></td>
                      <td><a href="" class="btn btn-sm btn-warning"> EDIT</a></td>
                      <td><a href="" class="btn btn-sm btn-danger"> DELETE</a></td>
                      </tr>
					  @endforeach
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
        @endsection