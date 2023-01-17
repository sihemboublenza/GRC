@extends('mastercontact')
@section('content')

<div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Oportunités</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item">Tables</li>
              <li class="breadcrumb-item active" aria-current="page">Oportunités</li>
            </ol>
          </div>

          <!-- Row -->
          <div class="row">
            <!-- Datatables -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                @foreach($client as $client)<h6 class="m-0 font-weight-bold text-primary">Oportunités de " {{$client->societe}} " </h6> @endforeach
                </div>
                <div class="table-responsive p-3">
               
                  <table class="table align-items-center table-flush" id="dataTable">
                    <thead class="thead-light">
                      <tr>
                        <th>Nom</th>
                        <th>Montant</th>
                        <th>Etape</th>
                        <th>Date de cloture</th>
                        <th>Action</th>
                        
                      </tr>
                    </thead>
                   
                    <tbody>
                     
                      @foreach($opportunite as $opportunite)
                      <tr>
                      <td>{{$opportunite->nom_opp}}</td>
                      <td>{{$opportunite->montant}} DA</td>
                      <td>{{$opportunite->etape}}</td>
                      <td>{{$opportunite->date_de_cloture}}</td>
                      <td><a href="{{ route('contact.viewFacture', $opportunite->nom_opp) }}" class="btn btn-sm btn-primary">Détails</a></td>
                     
                      </tr>
					            @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

@endsection