@extends('layouts.app')

@section('content')
        <div class="row ml-4 mr-4 mb-4 mt-2">
            <div class="col-md mt-3">
                <div class="container">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                            <a class="navbar-brand" href="#">Drinks ></a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                                <div class="navbar-nav">
                                    <a class="nav-item nav-link" href="#">Milk ></a>
                                    <a class="nav-item nav-link" href="#">Chocolatadas ></a>
                                    <a class="nav-item nav-link active" href="#">Chocolatada PIL<span class="sr-only">(current)</span></a>
                                </div>
                            </div>
                        </nav>
                <div class="row ml-1 mt-2">
                    <div class="col-sm">
                        <div class="row">
                                <img src="https://via.placeholder.com/150x110" alt="">
                        </div>
                        <div class="row mt-2">
                                <img src="https://via.placeholder.com/150x110" alt="">
                        </div>
                        <div class="row mt-2">
                                <img src="https://via.placeholder.com/150x110" alt="">
                        </div>
                        <div class="row mt-2">
                                <img src="https://via.placeholder.com/150x110" alt="">
                        </div>
                            
                    </div>
                    <div class="col-sm">
                            <img src="https://via.placeholder.com/500x500" alt="">
                    </div>     
                </div>
            </div>
            </div>
            <div class="col-sm mt-login ml-4 pl-4">
                <section>
                        <h2 class="header row">Chocolatada PIL</h2>
                        <p class="row">
                            <h5>Price : $ 2.5</h5>
                            <span class="price-before text-muted">$ 5</span>
                        </p>
                </section>
                    
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
            </div>
        </div>
@endsection