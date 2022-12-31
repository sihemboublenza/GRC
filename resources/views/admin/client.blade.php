@extends('master')
 @section('content')



  <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Clients</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item">Tables</li>
              <li class="breadcrumb-item active" aria-current="page">Clients</li>
            </ol>
          </div>

          <!-- Row -->
          <div class="row">
            <!-- Datatables -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Clients</h6>
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush" id="dataTable">
                   
                    <thead class="thead-light">
                      <tr>
                        <th>Société</th>
                        <th>Téléphone</th>
                        <th>Adresse</th>
                        <th>Site web</th>
                        <th/>
                        <th/>
                    </thead>                    
                    <tbody>
                      <tr>
                          <a href="" class="btn btn">ADD</a>
                      </tr>

                      @foreach($clients as $client)
                      <tr>
                      <td>{{$client->societe}}</td>
                      <td>{{$client->tel}}</td>
                      <td>{{$client->adresse}}</td>
                      <td>{{$client->siteweb}}</td>
                      <td><a href="" class="btn btn-warning"> EDIT</a></td>
                      <td><a href="" class="btn btn-danger"> DELETE</a></td>
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