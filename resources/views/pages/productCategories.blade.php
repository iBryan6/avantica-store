@extends('layouts.app')

@section('content')

<div class="row mt-4">

    {{-- Sidebar for the categories --}}
    @include('includes.sidebar_products_categories')

    {{-- Products --}}
    <div class="container">
    <section class="featured-products mt-4">
        <div class="row">
           
        </div>
        <div class="row card-deck container ml-1">
                @include('includes.productsTemplate')
                @include('includes.productsTemplate')
                @include('includes.productsTemplate')
                @include('includes.productsTemplate')
                
        </div>
        <div class="row card-deck container ml-1 mt-4">
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
</div>
@endsection