@extends('layouts.app')

@section('content')
<div class="row">

    {{-- Sidebar for the categories --}}
    @include('includes.sidebar_products_categories')

    {{-- Products --}}
    <section class="featured-products container mt-4">
        <div class="row">
            <div class="col-sm">
                <h2 class="centered">FEATURED PRODUCTS</h2>
            </div>
        </div>
        <div class="row card-deck">
                @include('includes.productsTemplate')
                @include('includes.productsTemplate')
                @include('includes.productsTemplate')
                @include('includes.productsTemplate')
                
        </div>
        <div class="row card-deck mt-4">
                @include('includes.productsTemplate')
                @include('includes.productsTemplate')
                @include('includes.productsTemplate')
                @include('includes.productsTemplate')
        </div>
                {{-- Pagination --}}
                @include('includes.pagination')
        </div> 
    </section>
</div>
@endsection