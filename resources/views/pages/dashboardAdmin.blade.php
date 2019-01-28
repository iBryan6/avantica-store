@extends('layouts.dashboards')

@section('content')
<section class="admin-dashboard">
    <div class="row">
        <div class="col-sm">
            <ul class="navbar-nav float-right">
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}"> <i class="fas fa-user-lock"></i> {{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}"><i class="fas fa-plus"></i> {{ __('Register') }}</a>
                </li>
                @endif
                @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false" v-pre>Welcome
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>
        
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
        
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
                @endguest
            </ul>
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
