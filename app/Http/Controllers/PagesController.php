<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;

class PagesController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }
    public function contact()
    {
        return view('pages.contact');
    }
    public function dashboardAdmin(Request $request)
    {
        $request->user()->authorizeRoles(1);
        return view('pages.dashboardAdmin');
    }
    public function store()
    {
        return view('pages.store');
    }
    
    public function dashboardDistributor(Request $request)
    {
        $request->user()->authorizeRoles(3);
        return view('pages.dashboardDistributor');
    }
    public function register()
    {
        return view('pages.register');
    }
    public function login()
    {
        return view('pages.login');
    }

    public function productDetails()
    {
        return view('pages.productDetails');
    }
}