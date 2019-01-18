@extends('layouts.app')

@section('content')
<div class="home container-fluid">
    <section class="how-it-works">
            <div class="row">
                    <div class="col-sm">
                        <h1 class="centered">HOW IT WORKS</h1>
                    </div>
                </div>
                <div class="row centered">
                    <div class="col-sm">
                        <i class="fas fa-cart-arrow-down fa-5x"></i>
                        <p>Load all your products in the cart and Checkout.</p>
                    </div>
                    <i class="fas fa-arrow-right fa-3x align-self-center"></i>
                    <div class="col-sm">
                        <i class="fas fa-truck-loading fa-5x"></i>  
                        <p>Distributor will take care of all the packing.</p> 
                    </div>
                    <i class="fas fa-arrow-right fa-3x align-self-center"></i>
                    <div class="col-sm">
                        <i class="fas fa-truck-moving fa-5x"></i>
                        <p>We personally take the products to you.</p>    
                    </div>
                    <i class="fas fa-arrow-right fa-3x align-self-center"></i>
                    <div class="col-sm">
                        <i class="fas fa-money-bill fa-5x"></i>   
                        <p>Pay for your products in person.</p>  
                    </div>
                </div>
    </section>
    <hr>
    <section class="featured-products">
            <div class="row">
                    <div class="col-sm">
                        <h2 class="centered">FEATURED PRODUCTS</h2>
                    </div>
            </div>
    </section>

</div>

@endsection
