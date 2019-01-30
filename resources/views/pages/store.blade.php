@extends('layouts.app')

@section('content')
<div class="container-fluid ">
    <div class="row mt-4">
        {{-- Sidebar for the categories --}}
        @include('includes.sidebar_products_categories')

        {{-- Products --}}
        <div class="col-12 col-sm-6 col-md-8">
            <section class="featured-products">
                <div class="row mt-2 card-deck">
                    @php
                        $products = App\Product::find([1,2,3]);
                    @endphp
                    
                    @foreach ($products as $product)
                    @php
                        $image = App\ProductImage::where('id_product',$product->id)->first();
                        $type = App\Type::where('id',$product->id_type)->first();
                        $category = App\Category::where('id',$type->id_category)->first();
                        $brand = App\Brand::where('id',$product->id_brand)->first();
                    @endphp
                        
                        <div class="col-12 col-md-6 col-lg-4">@include('includes.productsTemplate')</div>
        
                    @endforeach
                    
                </div>
                <div class="row mt-4 card-deck">
                        @php
                        $products = App\Product::find([4,5,6]);
                    @endphp
                    
                    @foreach ($products as $product)
                    @php
                        $image = App\ProductImage::where('id_product',$product->id)->first();
                        $type = App\Type::where('id',$product->id_type)->first();
                        $category = App\Category::where('id',$type->id_category)->first();
                        $brand = App\Brand::where('id',$product->id_brand)->first();
                    @endphp
                        
                        <div class="col-12 col-md-6 col-lg-4">@include('includes.productsTemplate')</div>
        
                    @endforeach
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
