@extends('layout.contact.index')
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
              <h6 class="m-0 font-weight-bold text-primary">Produits  </h6> 
                </div>
                <div class="table-responsive p-3">
               
                  <table class="table align-items-center table-flush" id="dataTable">
                    <thead class="thead-light">
                      <tr>
                        <th>Nom</th>

                        <th>description</th>
                        <th>prix</th>
                        <th>quantité</th>
                        <th>Total</th>

                        <th/>
                        <th/>
                        <th/>
                      </tr>
                    </thead>
                    <?php
                          $somme=0;
                          $t=0;
                          ?>
                    <tbody>
                     
                      @foreach($produit as $produit)
                      <tr>
                      <td>{{$produit->nom}}</td>
                      <td>{{$produit->description}}</td>
                      <td>{{$produit->prix}}</td>
                      <?php
                          $t=((float)($produit->prix)*((float)($produit->quanite)));
                          $somme+=$t;
                          ?>
                      <td>{{$produit->quanite}}</td>
                      <td><?php echo "$t" ?></td>

                     
                      </tr>
					@endforeach
                    </tbody>
                  </table>

                  <h6 class="m-0 font-weight-bold text-primary">Prix total :<?php echo "$somme" ?>  DA </h6> 


                </div>
              </div>
            </div>

@endsection