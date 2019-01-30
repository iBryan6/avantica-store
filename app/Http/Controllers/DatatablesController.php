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
            ->join('stock', 'products.id', '=', 'stock.id_products')
            ->select('products.*', 'type.name as type', 'brand.name as brand', 'category.name as category', 'stock.units as stock')
            ->get();

        return Datatables::of($query)
            ->editColumn('price', 'Bs {{$price}}')
            ->make(true);
    }
    public function getInvoice()
    {
        $query = DB::table('invoices')
            ->join('orders', 'invoices.id_order', '=', 'orders.id')
            ->join('users as distributor', 'invoices.id_user', '=', 'distributor.id')
            ->join('users as client', 'orders.id_user', '=', 'client.id')
            ->select('invoices.id as invoiceID', 'orders.created_at as date', 'distributor.name as distributor', 'orders.code as code', 'invoices.status as status', 'client.*')
            ->get();

        return Datatables::of($query)
            ->setRowClass('{{ $status == 0 ? "alert-warning" : "alert-success" }}')
            ->editColumn('status', '{{ $status == 0 ? "Pending" : "Done" }}')
            ->make(true);
    }
}