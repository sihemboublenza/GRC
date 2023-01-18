@extends('layout.admin.index')
@section('content')
<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <ol class="breadcrumb">
      <li class="breadcrumb-item">Tables</li>
      <li class="breadcrumb-item active" aria-current="page">Rendez-vous</li>
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
              <h4 class="text-center">Détails rendez-vous</h4>
              <label for="floatingInput">Date</label>
                <input type="date" name="date" class="form-control" value="{{$rdvs->date}}" id="floatingInput" disabled><br>
                <label for="floatingInput2">Heure</label>
                <input type="text" name="heure" class="form-control" value="{{$rdvs->heure}}" id="floatingInput2" disabled><br>
                <label for="floatingInput3">Compte rendu</label>
                <input type="text" name="compterendu" class="form-control" value="{{$rdvs->compterendu}}" id="floatingInput3" disabled><br>
                <br>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection