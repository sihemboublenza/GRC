@extends('layout.contact.index')
@section('content')
<div class="container-fluid" id="container-wrapper">
<div class="container-fluid" id="container-wrapper">

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="text-center"><strong>La facture</strong></h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-condensed">
                            <thead>
                                <tr>
                                    <td><strong>Nom</strong></td>
                                    <td class="text-center"><strong>Description</strong></td>
                                    <td class="text-center"><strong>Prix</strong></td>
                                    <td class="text-center"><strong>Quantité</strong></td>
                                    <td class="text-right"><strong>Total</strong></td>

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
                                    <td class="text-center">{{$produit->description}}</td>
                                    <td class="text-center">{{$produit->prix}}</td>
                                    <?php
                          $t=((float)($produit->prix)*((float)($produit->quanite)));
                          $somme+=$t;
                          ?>
                                    <td class="text-center">{{$produit->quanite}}</td>

                                    <td class="text-right"><?php echo "$t" ?></td>
                                </tr>
                                
                          @endforeach
                                
                                <tr>
                                    <td class="highrow"></td>
                                    <td class="highrow"></td>
                                    <td class="highrow"></td>
                                    <td class="highrow text-center"><strong>Prix total :</strong></td>
                                    <td class="highrow text-right"><?php echo "$somme" ?>  DA</td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<style>
.height {
    min-height: 200px;
}

.icon {
    font-size: 47px;
    color: #5CB85C;
}

.iconbig {
    font-size: 77px;
    color: #5CB85C;
}

.table > tbody > tr > .emptyrow {
    border-top: none;
}

.table > thead > tr > .emptyrow {
    border-bottom: none;
}

.table > tbody > tr > .highrow {
    border-top: 3px solid;
}
</style>
@endsection