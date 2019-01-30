<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Unesco Store') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container" id="app">
        @yield('content')
    </div>
</body>
<script src="{{ asset('js/app.js') }}"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script>
    $(document).ready(function() {    
        $('#users-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!! route('users.getusers') !!}',
            columns: [
                { data: 'id'},
                { data: 'username'},
                { data: 'name'},
                { data: 'last_name'},
                { data: 'city'},
                { data: 'address'},
                { data: 'email'},
                { data: 'phone_number'},
                { data: 'created_at'}
            ]
        });   

        $('#distributors-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!! route('users.getdistributors') !!}',
            columns: [
                { data: 'id'},
                { data: 'name'},
                { data: 'last_name'},
                { data: 'city'},
                { data: 'address'},
                { data: 'email'},
                { data: 'phone_number'},
                { data: 'created_at'}
            ]
        });     
 
        $('#products-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!! route('users.getproducts') !!}',
            columns: [
                { data: 'id'},
                { data: 'code'},
                { data: 'name'},
                { data: 'brand'},
                { data: 'type'},               
                { data: 'category'},  
                { data: 'stock'},         
                { data: 'price'}         
            ]
        });    
    });

</script>

</html>
