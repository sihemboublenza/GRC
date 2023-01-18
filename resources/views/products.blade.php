@extends('layout.public.index')
@section('content')
        <!-- Header -->
        <header class="ex-header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-10 offset-xl-1">
                        <h1 class="text-center">Products</h1>
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </header> <!-- end of ex-header -->
        <!-- end of header -->

        <div id="features" class="cards-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                    @foreach($produits as $item)
                        <!-- Card -->
                        <div class="card">
                            <div class="card-icon">
                                <img src="{{asset('$item->photo')}}" data-image-width="500" data-image-height="333"/>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">{{$item->nom}}</h4>
                                <p>{{$item->description}}</p>
                            </div>
                        </div>
                        <!-- end of card -->
                    @endforeach
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of cards-1 -->


@endsection