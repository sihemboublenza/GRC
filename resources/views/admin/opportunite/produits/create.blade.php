@extends('layout.admin.index')
@section('content')
<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <ol class="breadcrumb">
      <li class="breadcrumb-item">Tables</li>
      <li class="breadcrumb-item">Opportunités</li>
      <li class="breadcrumb-item" >{{$opp->nom_opp}}</li>
      <li class="breadcrumb-item">Produits</li>
      <li class="breadcrumb-item active" aria-current="page">Ajouter</li>
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
              <form action="{{ url('opportunite/produits') }}" method="post">
                {!! csrf_field() !!}
                <label for="floatingInput">Produit</label>
                <select class="form-control" id="floatingInput" name="produit">
                      @foreach($list as $item)
                    <option value="{{$item->id}}">{{$item->nom}}</option>
                      @endforeach
               </select><br>
                <label for="floatingInput2">Quantité</label>
                <input type="text" name="quantite" class="form-control" id="floatingInput2"><br>
                <input type="number" name="opportunite" hidden value="{{$opp->id}}"/>
                <br>
                <div class="col-md-12 text-center">
                  <input type="submit" value="Ajouter" class="btn btn-success col-5">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection