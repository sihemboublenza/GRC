@extends('layout.admin.index')
@section('content')
<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <ol class="breadcrumb">
      <li class="breadcrumb-item">Tables</li>
      <li class="breadcrumb-item active" aria-current="page">Opportunités</li>
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
              <h4 class="text-center">Modifier opportunité</h4>
              <form action="{{ url('opportunite/' . $opportunites->id) }}" method="post">
                {!! csrf_field() !!}
                @method("PATCH")
                <label for="floatingInput">Nom</label>
                <input type="text" name="nom" class="form-control" value="{{$opportunites->nom}}" id="floatingInput"><br>
                <label for="floatingInput2">Montant</label>
                <input type="number" name="montant" class="form-control" value="{{$opportunites->montant}}" id="floatingInput2"><br>
                <label for="floatingInput3">Étape</label>
                <input type="text" name="etape" class="form-control" value="{{$opportunites->etape}}" id="floatingInput3"><br>
                <label for="floatingInput4">Date de cloture</label>
                <input type="date" name="date_de_cloture" class="form-control" value="{{$opportunites->date_de_cloture}}" id="floatingInput4"><br>
                <label for="floatingInput4">Client</label>
                <input type="text" name="client" class="form-control" value="{{$opportunites->client}}" id="floatingInput4" ><br>
                <label for="floatingInput4">Produit</label>
                <input type="text" name="produit" class="form-control" value="{{$opportunites->produit}}" id="floatingInput4" ><br>
                <br>
                <div class="col-md-12 text-center">
                  <input type="submit" value="Modifier" class="btn btn-warning">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection