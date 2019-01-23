@extends('layouts.app')

@section('content')
<div class="container-fluid ">
    <div class="row mt-4">
        {{-- Sidebar for the categories --}}
        @include('includes.sidebar_products_categories')

        {{-- Products --}}
        <div class="col-12 col-sm-6 col-md-8">
            <section class="featured-products">
                <div class="row mt-4 card-deck">
                    <div class="col-12 col-md-6 col-lg-3">@include('includes.productsTemplate')</div>
                    <div class="col-12 col-md-6 col-lg-3">@include('includes.productsTemplate')</div>
                    <div class="col-12 col-md-6 col-lg-3">@include('includes.productsTemplate')</div>
                    <div class="col-12 col-md-6 col-lg-3">@include('includes.productsTemplate')</div>
                </div>
                <div class="row mt-4 card-deck">
                    <div class="col-12 col-md-6 col-lg-3">@include('includes.productsTemplate')</div>
                    <div class="col-12 col-md-6 col-lg-3">@include('includes.productsTemplate')</div>
                    <div class="col-12 col-md-6 col-lg-3">@include('includes.productsTemplate')</div>
                    <div class="col-12 col-md-6 col-lg-3">@include('includes.productsTemplate')</div>
                </div>

            </section>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-12">
            <!-- Pagination -->
            @include('includes.pagination')
        </div>
    </div>
</div>

@endsection
