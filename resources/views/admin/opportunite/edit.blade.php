@extends('layout.admin.index')
@section('content')
<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <ol class="breadcrumb">
      <li class="breadcrumb-item">Tables</li>
      <li class="breadcrumb-item active">Opportunités</li>
      <li class="breadcrumb-item active" aria-current="page" >{{$opportunites->nom}}</li>
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
                <input type="text" name="nom_opp" class="form-control" value="{{$opportunites->nom_opp}}" id="floatingInput"><br>
                <label for="floatingInput2">Étape</label>
                <select name="etape" class="form-control">
                  <option value="Prospection">Prospection</option>
                  <option value="Proposition/Devis">Proposition/Devis</option>
                  <option value="Négociation/Vérification">Négociation/Vérification</option>
                  <option value="Cloturée/Gagnée">Cloturée/Gagnée</option>
                  <option value="Cloturée/Perdue">Cloturée/Perdue</option>
                </select><br>
                <label for="floatingInput3">Date de cloture</label>
                <input type="date" name="date_de_cloture" class="form-control" value="{{$opportunites->date_de_cloture}}" id="floatingInput3"><br>
                <label for="floatingInput4">Client</label>
                <select class="form-control" id="floatingInput5" name="client">
                      @foreach($client as $client)
                    <option value="{{$client->id}}">{{$client->societe}}</option>
                      @endforeach
               </select>
                <br>
                <div class="col-md-12 text-center">
                  <input type="submit" value="Modifier" class="btn btn-warning col-5">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection