@extends('layout.admin.index')
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
        <div class="mb-4 form-floating">
          <div class="col-xl-6 offset-xl-3">
            <div class="text-box mt-5 mb-5">
              <h4 class="text-center">Détails prospect</h4>
                <label for="floatingInput">Nom</label>
                <input type="text" name="nom" class="form-control" value="{{$prospects->nom}}" id="floatingInput" disabled><br>
                <label for="floatingInput2">Prénom</label>
                <input type="text" name="prenom" class="form-control" value="{{$prospects->prenom}}" id="floatingInput2" disabled><br>
                <label for="floatingInput3">Société</label>
                <input type="text" name="societe" class="form-control" value="{{$prospects->societe}}" id="floatingInput3" disabled><br>
                <label for="floatingInput4">Fonction</label>
                <input type="text" name="fonction" class="form-control" value="{{$prospects->fonction}}" id="floatingInput4" disabled><br>
                <label for="floatingInput5">Adresse email</label>
                <input type="email" name="email" class="form-control" value="{{$prospects->email}}" id="floatingInput5" disabled><br>
                <label for="floatingInput6">Téléphone</label>
                <input type="tel" name="tel" class="form-control" value="{{$prospects->tel}}" id="floatingInput6" disabled><br>
                <label for="floatingInput7">Adresse</label>
                <input type="text" name="adresse" class="form-control" value="{{$prospects->adresse}}" id="floatingInput7" disabled><br>
                <label for="floatingInput8">Site Web</label>
                <input type="text" name="siteweb" class="form-control" value="{{$prospects->siteweb}}" id="floatingInput8" disabled><br>
                <label for="floatingInput9">Source</label>
                <input type="text" name="source" class="form-control" value="{{$prospects->source}}" id="floatingInput9" disabled><br>
                <br>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection