@extends('layout.contact.index')
@section('content')

<section class="vh-50" style="background-color: #f4f5f7;">
  <!--<div class="container py-5 h-100">-->
    <div class="row d-flex justify-content-center align-items-center h-90">
      <div class="col col-lg-9 mb-4 mb-lg-0">
        <div class="card mb-3" style="border-radius: .5rem;">
          @foreach ($client as $client)
          <div class="row g-0">
            <div class="col-md-4 gradient-custom text-center text-white"
              style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
            <br> <br> <h2 style="font-weight : bold; font-style: italic;">Client :</h2>

              <h3>{{$client->societe}}</h3>
             <!-- <p>Web Designer</p>-->
            
            </div>
            <div class="col-md-8">
              <div class="card-body p-4">
                <h5 style="font-weight : bold; font-style: italic;">Information</h5>
                <hr class="mt-0 mb-4">
                
                <div class="row pt-1">
                  <!--<div class="col-6 mb-3">
                    <h6>Societe</h6>
                    <p class="text-muted">{{$client->societe}}</p>
                  </div>-->
                  <div class="col-4 mb-1">
                    <h6>Phone</h6>
                    <p class="text-muted">{{$client->tel}}</p>
                  </div>
                  <div class="col-4 mb-1">
                    <h6>Adresse</h6>
                    <p class="text-muted">{{$client->adresse}}</p>
                  </div>
                  <div class="col-4 mb-1">
                    <h6>Site web </h6>
                    <p class="text-muted">{{$client->siteweb}}</p>
                  </div>
                </div>
               
                  
                </div>
                
               
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <!--</div>-->
</section>
<style>
  .gradient-custom {
/* fallback for old browsers */
background: #f6d365;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right bottom, rgba(246, 211, 101, 1), rgba(253, 160, 133, 1));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right bottom, rgba(246, 211, 101, 1), rgba(253, 160, 133, 1))
}
</style>

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
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h4 class="m-0 font-weight-bold text-primary">Contacts</h4>
        </div>
        
        <div class="p-3 table-responsive">
          <table class="table" id="dataTable">
            <thead class="thead-light">
              <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>

                <th>Fonction</th>
                <th>Téléphone</th>

                <th>Actions</th>
                <th/>
              </tr>
            </thead>
            <tbody>
            <tr>                      
	            @foreach($contacts as $item)
              
              <tr>
              <td>{{$item->nom}}</td>
              <td>{{$item->prenom}}</td>
              <td>{{$item->email}}</td>

              <td>{{$item->fonction}}</td>
              <td>{{$item->tel}}</td>



              <td><a href="{{ url('/contact/' . $item->id . '/edit/') }}" class="btn btn-sm btn-warning">Modifier</a></td>
             
              </tr>
             
	            @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <!-- DataTable with Hover -->
   
  </div>
  <!--Row-->


@endsection