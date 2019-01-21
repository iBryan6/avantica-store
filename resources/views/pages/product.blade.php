@extends('layouts.app')

@section('content')
<div class="row ml-4 mr-4 mb-4 mt-2">
    <div class="col-md mt-3">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Food</a></li>
                    <li class="breadcrumb-item"><a href="#">Milk</a></li>
                    <li class="breadcrumb-item"><a href="#">PIL Andina</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Chocolatada</li>
                </ol>
            </nav>
            <div class="row ml-1 mt-2">
                <div class="col-sm">
                    <div class="row mt-2">
                        <div class="col-3 col-sm-6 col-md-12">
                            <img class="img-fluid img-thumbnail rounded mx-auto d-block" src="https://via.placeholder.com/150x110"
                                alt="">
                        </div>
                        <div class="col-3 col-sm-6 col-md-12">
                            <img class="img-fluid img-thumbnail rounded mx-auto d-block" src="https://via.placeholder.com/150x110"
                                alt="">
                        </div>
                        <div class="col-3 col-sm-6 col-md-12">
                            <img class="img-fluid img-thumbnail rounded mx-auto d-block" src="https://via.placeholder.com/150x110"
                                alt="">
                        </div>
                        <div class="col-3 col-sm-6 col-md-12">
                            <img class="img-fluid img-thumbnail rounded mx-auto d-block" src="https://via.placeholder.com/150x110"
                                alt="">
                        </div>
                    </div>


                </div>
                <div class="col-sm">
                    <img class="img-fluid" src="https://via.placeholder.com/500x500" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="card col-md mt-4 ml-4 pl-4">
        <div class="card-header">
            <h2 class="card-title header" style="float:left;">Milk Pil</h2>
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
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm">
    </div>
</div>
@endsection
