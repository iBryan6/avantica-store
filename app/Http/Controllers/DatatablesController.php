<?php

namespace App\Http\Controllers;

use App\User;
use DataTables;

class DatatablesController extends Controller
{
    public function getUsers()
    {
        return Datatables::of(User::query())->make(true);
    }
}