@extends('master')
@section('content')
<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <ol class="breadcrumb">
      <li class="breadcrumb-item">Tables</li>
      <li class="breadcrumb-item active" aria-current="page">Prospects</li>
    </ol>
  </div>

  <!-- Row -->
  <div class="row">
    <!-- Datatables -->
    <div class="col-lg-12">
      <div class="card mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h4 class="m-0 font-weight-bold text-primary">Prospects</h4>
        </div>
        <div class="col-md-12 text-right">
          <a href="{{ url('/prospect/create') }}" class="btn btn-success">Ajouter</a>
        </div>
        <div class="p-3 table-responsive">
          <table class="table" id="dataTable">
            <thead class="thead-light">
              <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Société</th>
                <th>Fonction</th>
                <th>Email</th>
                <th>Téléphone</th>
                <th>Statut</th>
                <th/>
                <th>Actions</th>
                <th/>
              </tr>
            </thead>
            <tbody>
            <tr>                      
	            @foreach($prospects as $item)
              <tr>
              <td>{{$item->nom}}</td>
              <td>{{$item->prenom}}</td>
              <td>{{$item->societe}}</td>
              <td>{{$item->fonction}}</td>
              <td>{{$item->email}}</td>
              <td>{{$item->tel}}</td>
              <td>{{$item->statut}}</td>
              <td><a href="{{ url('/prospect/' . $item->id) }}" class="btn btn-sm btn-primary">Détails</a></td>
              <td><a href="{{ url('/prospect/' . $item->id . '/edit/') }}" class="btn btn-sm btn-warning">Modifier</a></td>
              <td><form method="POST" action="{{ url('/prospect' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                      {{ method_field('DELETE') }}
                      {{ csrf_field() }}
                      <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm("Voulez-vous vraimenet supprimer ?")"><i class="fa fa-trash-o" aria-hidden="true"></i> Supprimer</button>
                  </form>
              </td>
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