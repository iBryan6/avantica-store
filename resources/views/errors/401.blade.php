@extends('layouts.app')
@section('content')
<div class="container errors">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h1 class="card-header" style="color:#445268">Error</h1>

                <div class="card-body">
                    <h5>Sorry, you are unauthorized to reach this page</h5>
                    <a href="/" class="float-right">
                        <button class="btn btn-secondary">
                            Go Back
                        </button>
                    </a>
            
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
