<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductCategoriesController extends Controller
{
    public function index(){
        return view('pages.productCategories');
    }
}
