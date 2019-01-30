<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

//PAGE VIEWS
Route::get('/', 'PagesController@home');
Route::get('/contact', 'PagesController@contact');
Route::get('/dashboard-admin', 'PagesController@dashboardAdmin');
Route::get('/store', 'PagesController@store');
Route::get('/productDetails', 'PagesController@productDetails');
Route::get('/dashboard-distributor', 'PagesController@dashboardDistributor');
Route::get('/register', 'PagesController@register');
Route::get('/login', 'PagesController@login');

//LARAVEL AUTHENTICATIONS
Auth::routes();

//ADMIN DATATABLES
Route::get('users', 'DatatablesController@getUsers')->name('users.getusers');
Route::get('distributors', 'DatatablesController@getDistributors')->name('users.getdistributors');
Route::get('products', 'DatatablesController@getProducts')->name('users.getproducts');
Route::get('invoices', 'DatatablesController@getInvoice')->name('users.getinvoice');