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
              <h4 class="text-center">Ajouter produit</h4>
              <form action="{{ url('produit/') }}" method="post">
                {!! csrf_field() !!}
                <label for="floatingInput">Nom</label>
                <input type="text" name="nom" class="form-control" id="floatingInput"><br>
                <label for="floatingInput2">Description</label>
                <input type="text" name="description" class="form-control" id="floatingInput2"><br>
                <label for="floatingInput3">Photo</label>
                <input type="file" name="photo" class="form-control" id="floatingInput3"><br>
                <label for="floatingInput4">Prix</label>
                <input type="number" name="prix" class="form-control" id="floatingInput5"><br>
                <label for="floatingInput5">Quantité</label>
                <input type="number" name="quantite" class="form-control" id="floatingInput6"><br>
                <br>
                <div class="col-md-12 text-center">
                  <input type="submit" value="Ajouter" class="btn btn-success">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection