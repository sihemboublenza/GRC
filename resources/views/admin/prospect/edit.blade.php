@extends('master')
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
              <h4 class="text-center">Modifier prospect</h4>
              <form action="{{ url('prospect/' . $prospects->id) }}" method="post">
                {!! csrf_field() !!}
                @method("PATCH")
                <input type="hidden" name="id" value="{{$prospects->id}}" id="id" />
                <label for="floatingInput">Nom</label>
                <input type="text" name="nom" class="form-control" value="{{$prospects->nom}}" id="floatingInput"><br>
                <label for="floatingInput2">Prénom</label>
                <input type="text" name="prenom" class="form-control" value="{{$prospects->prenom}}" id="floatingInput2"><br>
                <label for="floatingInput3">Société</label>
                <input type="text" name="societe" class="form-control" value="{{$prospects->societe}}" id="floatingInput3"><br>
                <label for="floatingInput4">Fonction</label>
                <input type="text" name="fonction" class="form-control" value="{{$prospects->fonction}}" id="floatingInput4"><br>
                <label for="floatingInput5">Adresse email</label>
                <input type="email" name="email" class="form-control" value="{{$prospects->email}}" id="floatingInput5"><br>
                <label for="floatingInput6">Téléphone</label>
                <input type="tel" name="tel" class="form-control" value="{{$prospects->tel}}" id="floatingInput6"><br>
                <label for="floatingInput7">Adresse</label>
                <input type="text" name="adresse" class="form-control" value="{{$prospects->adresse}}" id="floatingInput7"><br>
                <label for="floatingInput8">Site Web</label>
                <input type="text" name="siteweb" class="form-control" value="{{$prospects->siteweb}}" id="floatingInput8"><br>
                <label for="floatingInput9">Source</label>
                <input type="text" name="source" class="form-control" value="{{$prospects->source}}" id="floatingInput9"><br>
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
 

  <!-- Modal Logout -->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Are you sure you want to logout?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
          <a href="login.html" class="btn btn-primary">Logout</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection