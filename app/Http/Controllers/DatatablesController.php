<?php

namespace App\Http\Controllers;

use DataTables;
use DB;

class DatatablesController extends Controller
{
    public function getUsers()
    {
        $query = DB::select('SELECT *
            FROM users
            INNER JOIN role_user
            WHERE users.id = role_user.user_id
            AND role_user.user_type_id =?', [2]);

        return Datatables::of($query)->make(true);
    }
    public function getDistributors()
    {
        $query = DB::select('SELECT *
            FROM users
            INNER JOIN role_user
            WHERE users.id = role_user.user_id
            AND role_user.user_type_id =?', [3]);

        return Datatables::of($query)->make(true);
    }
}