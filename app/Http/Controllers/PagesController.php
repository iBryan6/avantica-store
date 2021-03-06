<?php

namespace App\Http\Controllers;

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
    public function dashboardAdmin()
    {
        return view('pages.dashboardAdmin');
    }
    public function store()
    {
        return view('pages.store');
    }
    public function productDetails()
    {
        return view('pages.productDetails');
    }
    public function dashboardDistributor()
    {
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
}