<?php

namespace App\Http\Controllers;

use DataTables;
use DB;
use App\Model\User;

class DatatablesController extends Controller
{
    public function getUsers()
    {
        
        $query = DB::select('SELECT * 
            FROM users 
            WHERE id_user_type =2');

        return Datatables::of($query)->make(true);
    }
}