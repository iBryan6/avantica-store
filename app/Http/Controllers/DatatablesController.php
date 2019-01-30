<?php

namespace App\Http\Controllers;

use DataTables;
use DB;

class DatatablesController extends Controller
{
    public function getUsers()
    {
        $query = DB::table('users')->where('id_user_type', 2)->get();
        return Datatables::of($query)
            ->setRowId('{{$id}}')
            ->make(true);
    }
    public function getDistributors()
    {
        $query = DB::table('users')->where('id_user_type', 3)->get();
        return Datatables::of($query)->make(true);
    }
}