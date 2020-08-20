<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('product/show', function () {
    return view('product.show');
});
Route::get('product/detail', function () {
    return view('product.detail');
});


//--------------*****----------------
//-------------MINH LE---------------
#********ADMIN ROUTES - starts *******
//--------------*****----------------

Route::get('admin', function () {
    return view('admin.dashboard.dashboard');
});
Route::get('admin/order', function () {
    return view('admin.order.show');
});
Route::get('admin/product', function () {
    return view('admin.product.show');
});
Route::get('admin/user', function () {
    return view('admin.user.show');
});

//--------------*****----------------
#********ADMIN ROUTES - ends *******
//--------------*****----------------




//--------------*****----------------
//-------------TUAN DUONG---------------
#********CLIENT ROUTES - starts *******
//--------------*****----------------

Route::get('contact', function () {
    return view('client.product.contact');
});


//--------------*****----------------
#********CLIENT ROUTES - ends *******
//--------------*****----------------
