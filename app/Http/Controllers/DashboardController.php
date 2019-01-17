<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request){
        return view('dashboard',[
            'title'=> $request->query('title','titulo por default')
        ]);
    }
}
