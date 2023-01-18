@extends('layout.admin.index')
@section('content')
<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <ol class="breadcrumb">
      <li class="breadcrumb-item">Tables</li>
      <li class="breadcrumb-item">Utilisateurs</li>
      <li class="breadcrumb-item active" aria-current="page">{{$users->nom}} {{$users->prenom}}</li>
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
              <h4 class="text-center">Détails utilisateur</h4>
              <label for="floatingInput">Nom</label>
                <input type="text" name="nom" class="form-control" value="{{$users->nom}}" id="floatingInput" disabled><br>
                <label for="floatingInput2">Prénom</label>
                <input type="text" name="prenom" class="form-control" value="{{$users->prenom}}" id="floatingInput2" disabled><br>
                <label for="floatingInput3">Photo</label>
                <img src="../public/images/{{$users->photo}}">
                <input type="file" name="photo" class="form-control" id="floatingInput3" disabled><br>
                <label for="floatingInput4">Email</label>
                <input type="nemail" name="email" class="form-control" value="{{$users->email}}" id="floatingInput5" disabled><br>
                <label for="floatingInput2">Rôle</label>
                <input type="text" name="role" class="form-control" value="{{$users->role}}" id="floatingInput2" disabled><br>
                <br>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection