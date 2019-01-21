@extends('layouts.dashboards')

@section('content')
<section class="admin-dashboard">
    <div class="row">
        <div class="col-sm">
            <div class="dropdown">
                <button class="dropdown-toggle logged-text" id="dropdownText" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    Logged in as Admin Bryan
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownText">
                    <a href="/"><button class="dropdown-item" type="button">Log Out</button></a>
                </div>
            </div>
        </div>
    </div>

    <!-- TABS -->
    <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="dashboard-tab" data-toggle="tab" href="#dashboard" role="tab" aria-controls="dashboard"
                aria-selected="true">Dashboard</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="distributors-tab" data-toggle="tab" href="#distributors" role="tab" aria-controls="distributors"
                aria-selected="false">Distributors</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="products-tab" data-toggle="tab" href="#products" role="tab" aria-controls="products"
                aria-selected="false">Products</a>
        </li>
    </ul>

    <!-- TABLES -->
    <div class="tab-content" id="dashboardTab">
        <!-- DASHBOARD -->
        @include('includes.dashboardAdmin.dashboard')

        <!-- DISTRIBUTORS -->
        @include('includes.dashboardAdmin.distributors')

        <!-- PRODUCTS -->
        @include('includes.dashboardAdmin.products')
    </div>
</section>
@endsection
