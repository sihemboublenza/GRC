@extends('layout.admin.index')
@section('content')
<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <ol class="breadcrumb">
      <li class="breadcrumb-item">Tables</li>
      <li class="breadcrumb-item active">Opportunités</li>
      <li class="breadcrumb-item active" aria-current="page" >{{$opportunites->nom_opp}}</li>
    </ol>
  </div>

  <!-- Row -->
  <div class="row">
    <!-- Datatables -->
    <div class="col-lg-12">
      <div class="card mb-4">
        <div class="mb-4 form-floating">
          <div class="col-xl-6 offset-xl-3">
            <div class="text-box mt-5 mb-5">
              <h4 class="text-center">Détails opportunité</h4>
              <label for="floatingInput">Nom</label>
                <input type="text" name="nom" class="form-control" value="{{$opportunites->nom_opp}}" id="floatingInput" disabled><br>
                <label for="floatingInput2">Montant</label>
                <input type="number" name="montant" class="form-control" value="{{$opportunites->montant}}" id="floatingInput2" disabled><br>
                <label for="floatingInput3">Étape</label>
                <input type="text" name="etape" class="form-control" value="{{$opportunites->etape}}" id="floatingInput3" disabled><br>
                <label for="floatingInput4">Date de cloture</label>
                <input type="date" name="date_de_cloture" class="form-control" value="{{$opportunites->date_de_cloture}}" id="floatingInput4" disabled><br>
                <br>
                <div class="col-md-12 text-center">
                  <a href="{{ url('/opportunite/' . $opportunites->id . '/masterproduit/') }}" class="btn btn-sm btn-primary col-5">Produits liés</a>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection