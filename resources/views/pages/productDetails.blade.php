@extends('layouts.app')

@section('content')
<div class="row mr-4 mb-4 mt-4 ml-2">
    <div class="col-md mt-3">
        <div class="container mt-4 mb-4">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Food</a></li>
                    <li class="breadcrumb-item"><a href="#">Milk</a></li>
                    <li class="breadcrumb-item"><a href="#">PIL Andina</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Chocolatada</li>
                </ol>
            </nav>
            <div class="row ml-1 mt-2 mr-3">
                <div class="col">
                    <div class="row mt-2">
                        <div class="col-6 col-sm-3 col-md-4 col-lg-6">
                            <img class="img-fluid img-thumbnail rounded mx-auto d-block" src="https://via.placeholder.com/150x110"
                                alt="">
                        </div>
                        <div class="col-6 col-sm-3 col-md-4 col-lg-6">
                            <img class="img-fluid img-thumbnail rounded mx-auto d-block" src="https://via.placeholder.com/150x110"
                                alt="">
                        </div>
                        <div class="col-6 col-sm-3 col-md-4 col-lg-6">
                            <img class="img-fluid img-thumbnail rounded mx-auto d-block" src="https://via.placeholder.com/150x110"
                                alt="">
                        </div>
                        <div class="col-6 col-sm-3 col-md-4 col-lg-6">
                            <img class="img-fluid img-thumbnail rounded mx-auto d-block" src="https://via.placeholder.com/150x110"
                                alt="">
                        </div>
                    </div>


                </div>
                <div class="col-sm">
                    <img class="img-fluid img-thumbnail" src="https://via.placeholder.com/600x600" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="card col-md-5 mt-4 ml-4 pl-4">
        <div class="card-header">
            <h2 class="card-title header" style="float:left;">Chocolatada PIL</h2>
        </div>
        <div class="card-body mt-4">
            <h3 class="price-now">
                $ 2.99
                <small class="text-muted ml-4" style="text-decoration: line-through">
                    $ 5
                </small>
                <small class="text-muted float-right">
                    FLAT 24% OFF
                </small>
            </h3>
            <br>
            <br>
            <i class="fas fa-ticket-alt mb-4">&nbsp;&nbsp; Delivery will have a 15% discount if the payment is with a
                debit card</i>
            <br>
            <div class="row">
                    <div class="col-md-6 mt-4">
                            <p class="text-muted" style="font-size: 1rem">Product Delivery</p>
                            <input type="text" placeholder="Enter promo code" class="mt-3 ml-1">
                    </div>
                    <div class="col-md-6 mt-4">
                            <a href="#">
                                <button class="btn btn-secondary">Add to Cart</button>
                            </a>
                            <br>
                            <a href="#">
                                <button class="btn btn-secondary mt-3">Check Availability</button>
                            </a>
                    </div>
            </div>
           



        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm">
    </div>
</div>
@endsection
