@extends('layouts.app')

@section('content')
<div class="home mb-3">
    @include('includes.slider')
    <section class="how-it-works container mt-5">
        <div class="row mb-4">
            <div class="col-sm">
                <h1 class="centered">HOW IT WORKS</h1>
            </div>
        </div>
        <div class="row centered">
            <div class="col-sm">
                <i class="fas fa-cart-arrow-down fa-5x"></i>
                <p>Load all your products in the cart and Checkout.</p>
            </div>
            <i class="fas fa-arrow-right fa-3x align-self-center arrow"></i>
            <div class="col-sm">
                <i class="fas fa-truck-loading fa-5x"></i>
                <p>Distributor will take care of all the packing.</p>
            </div>
            <i class="fas fa-arrow-right fa-3x align-self-center arrow"></i>
            <div class="col-sm">
                <i class="fas fa-truck-moving fa-5x"></i>
                <p>We personally take the products to you.</p>
            </div>
            <i class="fas fa-arrow-right fa-3x align-self-center arrow"></i>
            <div class="col-sm">
                <i class="fas fa-money-bill fa-5x"></i>
                <p>Pay for your products in person.</p>
            </div>
        </div>
    </section>
    <hr>
    <section class="featured-products mt-5">
        <div class="container">
            <div class="row mb-4">
                <div class="col-sm">
                    <h2 class="centered">FEATURED PRODUCTS</h2>
                </div>
            </div>
            <div class="row card-deck">
                <div class="col-12 col-md-6 col-lg-4">@include('includes.productsTemplate')</div>
                <div class="col-12 col-md-6 col-lg-4">@include('includes.productsTemplate')</div>
                <div class="col-12 col-md-6 col-lg-4">@include('includes.productsTemplate')</div>
            </div>
            <div class="row mt-4">
                <div class="col-sm">
                    <a href="/product_categories">
                        <button class="btn btn-secondary float-right">
                            View All Products
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </section>

</div>
@endsection
