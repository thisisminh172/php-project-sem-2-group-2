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
Route::get('admin', 'AdminDashboardController@index');
//ORDER
Route::get('admin/order','AdminOrderController@index');
Route::get('admin/order/cancel/{order_id}','AdminOrderController@cancel');
//PRODUCT
Route::get('admin/product', 'AdminProductController@index');
Route::get('admin/product/add', 'AdminProductController@add');
Route::post('admin/product/store', 'AdminProductController@store');
//USER
Route::get('login', 'AccountController@login');
Route::post('checkLogin', 'AccountController@checkLogin');

Route::get('relogin', function () {
    return view('admin.user.relogin');
});

Route::get('addUser', function () {
    return view('admin.user.createUser');
});
//test logout
use Illuminate\Http\Request;
Route::get('admin/user/logout',function(Request $request){
    $request->session()->flush();
    return view('admin.user.login');
});
//test logout

Route::get('createUser', 'AccountController@addUser');




// Route::get('admin/createUser', function () {
//     return view('admin.user.createUser');
// });

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
Route::get('product/show', 'ClientProductController@show');
//=====product detail

Route::get('product/show/{id}', 'ClientProductController@detail')->name('product.show.detail');
//----CONTACT
Route::get('contact', function () {
    return view('client.contact.contact');
});
//----INTRO
Route::get('intro', function () {
    return view('client.pages.intro');
});
//----NEWS
Route::get('news', function () {
    return view('client.pages.news');
});
//CART
Route::get('cart/show','ClientCartController@show');
Route::get('cart/add/{id}','ClientCartController@add')->name('cart.add');
Route::post('cart/store','ClientCartController@store')->name('cart.store');
Route::get('cart/remove/{rowId}','ClientCartController@remove')->name('cart.remove');
Route::get('cart/destroy','ClientCartController@destroy')->name('cart.destroy');
Route::post('cart/update','ClientCartController@update')->name('cart.update');
Route::post('/home/find', 'ClientProductController@find')->name('home.find');
//PAYMENT
Route::get('order/add','ClientOrderController@index');
<<<<<<< HEAD
Route::get('order/store','ClientOrderController@store');
//Mail
Route::post('/sendemailcontact/send', 'ContactusMailController@send');
=======
Route::post('order/store','ClientOrderController@store');
Route::get('order/success/{order_id}','ClientOrderController@success')->name('order.success');
>>>>>>> 117d160c5e0f3f9f4251585702cb75b52fe83c9a
//--------------*****----------------
#********CLIENT ROUTES - ends *******

// test
// Route::get('order/success',function(){
//     return view('client.cart.payment_success');
// });

