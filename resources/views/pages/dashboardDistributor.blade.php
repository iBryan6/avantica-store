@extends('layouts.dashboards')

@section('content')
    
<section class="admin-dashboard">
        <div class="row">
            <div class="col-sm">
                <div class="dropdown">
                    <button class="dropdown-toggle logged-text" id="dropdownText" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        Logged in as Distributor Renato
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
                    aria-selected="true">Orders</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="distributors-tab" data-toggle="tab" href="#distributors" role="tab" aria-controls="distributors"
                    aria-selected="false">History</a>
            </li>
        </ul>
    
        <!-- TABLES -->
        <div class="tab-content" id="dashboardTab">
            <!-- DASHBOARD -->
            @include('includes.dashboardDistributor.dashboard_distributor')
    
            <!-- DISTRIBUTORS -->
            @include('includes.dashboardDistributor.orders_history')
        </div>
    </section>

@endsection
