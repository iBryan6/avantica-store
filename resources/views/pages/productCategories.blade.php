@extends('layouts.app')

@section('content')

<div class="row mt-4">

    {{-- Sidebar for the categories --}}
    @include('includes.sidebar_products_categories')

    {{-- Products --}}
    <div class="col-12 col-sm-6 col-md-8 container">
        <section class="featured-products mt-4">
            <div class="row card-deck container ml-1">
                <div class="col-12 col-sm-6 col-md-3">@include('includes.productsTemplate')</div>
                <div class="col-12 col-sm-6 col-md-3">@include('includes.productsTemplate')</div>
                <div class="col-12 col-sm-6 col-md-3">@include('includes.productsTemplate')</div>
                <div class="col-12 col-sm-6 col-md-3">@include('includes.productsTemplate')</div>
            </div>
            <div class="row card-deck container ml-1 mt-4">
                <div class="col-sm-12 col-md-6 col-lg-3">@include('includes.productsTemplate')</div>
                <div class="col-sm-12 col-md-6 col-lg-3">@include('includes.productsTemplate')</div>
                <div class="col-sm-12 col-md-6 col-lg-3">@include('includes.productsTemplate')</div>
                <div class="col-sm-12 col-md-6 col-lg-3">@include('includes.productsTemplate')</div>
            </div>
            {{-- Pagination --}}
            @include('includes.pagination')
        </section>
</div>
</div>
@endsection
