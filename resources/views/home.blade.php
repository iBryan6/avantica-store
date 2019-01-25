@extends('layouts.app')

@section('content')
<div class="container mb-dashboard mt-dashboard">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2>Dashboard</h2></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
<h4>You are logged in!</h4>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
