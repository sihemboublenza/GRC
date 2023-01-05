@extends('master')
@section('content')
<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <ol class="breadcrumb">
      <li class="breadcrumb-item">Tables</li>
      <li class="breadcrumb-item active" aria-current="page">Produits</li>
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
              <h4 class="text-center">Détails produit</h4>
                <label for="floatingInput">Nom</label>
                <input type="text" name="nom" class="form-control" value="{{$produits->nom}}" id="floatingInput" disabled><br>
                <label for="floatingInput2">Description</label>
                <input type="text" name="description" class="form-control" value="{{$produits->description}}" id="floatingInput2" disabled><br>
                <img src="../public/images/{{$produits->photo}}">
                <label for="floatingInput3">Prix</label>
                <input type="number" name="prix" class="form-control" value="{{$produits->prix}}" id="floatingInput3" disabled><br>
                <label for="floatingInput4">Quantité</label>
                <input type="tel" name="quantite" class="form-control" value="{{$produits->quantite}}" id="floatingInput4" disabled><br>
                <br>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection