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

// Route::get('/', function () {
//     return view('welcome');
// });

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
//DASHBOARD
Route::get('admin','AdminDashboardController@index');
//ORDER
Route::get('admin/order','AdminOrderController@index');
//PRODUCT
Route::get('admin/product', 'AdminProductController@index');
Route::get('admin/product/add', 'AdminProductController@add');
Route::post('admin/product/store', 'AdminProductController@store');
//USER
Route::get('admin/user', 'AdminUserController@index');
//POST

//--------------*****----------------
#********ADMIN ROUTES - ends *******
//--------------*****----------------




//--------------*****----------------
//-------------TUAN DUONG---------------
#********CLIENT ROUTES - starts *******
//--------------*****----------------
//=====HOME
Route::get('/', 'ClientProductController@index');
Route::get('home', 'ClientProductController@index');
//=====product show
Route::get('product/show','ClientProductController@show');
//=====product detail
Route::get('product/show/{id}',function(){
    return view('client.product.detail');
});
//----CONTACT
Route::get('contact', function () {
    return view('client.contact.contact');
});
//----INTRO
Route::get('intro',function(){
    return view('client.pages.intro');
});
//----NEWS
Route::get('news',function(){
    return view('client.pages.news');
});
//CART
Route::get('cart',function(){
    return view('client.cart.cart');
});

Route::post('/home/find', 'ClientProductController@find')->name('home.find');

//--------------*****----------------
#********CLIENT ROUTES - ends *******
//--------------*****----------------
