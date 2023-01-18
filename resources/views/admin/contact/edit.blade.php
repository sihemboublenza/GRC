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
        <div class="mb-4 form-floating">
          <div class="col-xl-6 offset-xl-3">
            <div class="text-box mt-5 mb-5">
              <h4 class="text-center">Modifier contact</h4>
              <form action="{{ url('contact/' . $contacts->id) }}" method="post">
                {!! csrf_field() !!}
                @method("PATCH")
                <label for="floatingInput">Nom</label>
                <input type="text" name="nom" class="form-control" value="{{$contacts->nom}}" id="floatingInput"><br>
                <label for="floatingInput2">Prénom</label>
                <input type="text" name="prenom" class="form-control" value="{{$contacts->prenom}}" id="floatingInput2"><br>
                <label for="floatingInput3">Fonction</label>
                <input type="text" name="fonction" class="form-control" value="{{$contacts->fonction}}" id="floatingInput3"><br>
                <label for="floatingInput4">Adresse email</label>
                <input type="email" name="email" class="form-control" value="{{$contacts->email}}" id="floatingInput4"><br>
                <label for="floatingInput6">Téléphone</label>
                <input type="tel" name="tel" class="form-control" value="{{$contacts->tel}}" id="floatingInput6"><br>
                <img src="../resources/images/{{$contacts->photo}}">
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