<?php

namespace App\Http\Controllers;

use DataTables;
use DB;

class DatatablesController extends Controller
{
    public function getUsers()
    {
        $query = DB::table('users')
            ->join('cities', 'users.id_city', '=', 'cities.id')
            ->where('id_user_type', 2)
            ->select('users.*', 'cities.name as city')
            ->get();
        return Datatables::of($query)->make(true);
    }
    public function getDistributors()
    {
        $query = DB::table('users')
            ->join('cities', 'users.id_city', '=', 'cities.id')
            ->where('id_user_type', 3)
            ->select('users.*', 'cities.name as city')
            ->get();
        return Datatables::of($query)->make(true);
    }
    public function getProducts()
    {
        $query = DB::table('products')
            ->join('type', 'products.id_type', '=', 'type.id')
            ->join('brand', 'products.id_brand', '=', 'brand.id')
            ->join('category', 'category.id', '=', 'type.id_category')
        //->join('stock', 'products.id', '=', 'stock.id_products')
            ->select('products.*', 'type.name as type', 'brand.name as brand', 'category.name as category')
            ->get();

        return Datatables::of($query)
            ->editColumn('price', 'Bs {{$price}}')
            ->make(true);
    }
}