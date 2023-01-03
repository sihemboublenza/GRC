@extends('master')
@section('content')
<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <ol class="breadcrumb">
      <li class="breadcrumb-item">Tables</li>
      <li class="breadcrumb-item active" aria-current="page">Clients</li>
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
              <h4 class="text-center">Modifier client</h4>
              <form action="{{ url('client/' . $clients->id) }}" method="post">
                {!! csrf_field() !!}
                @method("PATCH"
                <label for="floatingInput">Société</label>
                <input type="text" name="societe" class="form-control" value="{{$clients->societe}}" id="floatingInput"><br>
                <label for="floatingInput2">Téléhphone</label>
                <input type="tel" name="tel" class="form-control" value="{{$clients->tel}}" id="floatingInput2"><br>
                <label for="floatingInput3">Adresse</label>
                <input type="text" name="adresse" class="form-control" value="{{$clients->adresse}}" id="floatingInput3"><br>
                <label for="floatingInput4">Site Web</label>
                <input type="email" name="siteweb" class="form-control" value="{{$clients->siteweb}}" id="floatingInput4"><br>
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