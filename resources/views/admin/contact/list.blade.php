@extends('layout.admin.index')
@section('content')
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
          <a href="{{ url('/contact/create') }}" class="btn btn-success col-2">Ajouter</a>
        </div>
        <div class="p-3 table-responsive">
          <table class="table" id="dataTable">
            <thead class="thead-light">
              <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Fonction</th>
                <th>Client</th>
                <th>Email</th>
                <th/>
                <th>Actions</th>
                <th/>
              </tr>
            </thead>
            <tbody>
            <tr>                      
	            @foreach($clients as $item)
              <tr>
              <td>{{$item->nom}}</td>
              <td>{{$item->prenom}}</td>
              <td>{{$item->fonction}}</td>
              <td>{{$item->societe}}</td>
              <td>{{$item->email}}</td>
              <td><a href="{{ url('/contact/' . $item->id) }}" class="btn btn-sm btn-primary">Détails</a></td>
              <td><a href="{{ url('/contact/' . $item->id . '/edit/') }}" class="btn btn-sm btn-warning">Modifier</a></td>
              <td><form method="POST" action="{{ url('/contact' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
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

@endsection