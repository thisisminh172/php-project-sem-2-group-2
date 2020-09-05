<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
Route::get('admin', 'AdminDashboardController@index')->middleware('checkLogin:user');
//ORDER

Route::get('admin/order', 'AdminOrderController@index')->middleware('checkLogin:user');
Route::get('admin/order/cancel/{order_id}', 'AdminOrderController@cancel')->name('admin.order.cancel')->middleware('checkLogin:user');
Route::get('admin/order/success/{order_id}', 'AdminOrderController@success')->name('admin.order.success')->middleware('checkLogin:user');
Route::post('admin/order/search', 'AdminOrderController@search')->middleware('checkLogin:user');
Route::get('admin/order/show/{status}', 'AdminOrderController@show_by_status')->name('order.show.status')->middleware('checkLogin:user');
Route::get('admin/order/detail/{id}','AdminOrderController@detail')->name('admin.order.detail');
//PRODUCT

Route::get('admin/product', 'AdminProductController@index')->middleware('checkLogin:user');
Route::get('admin/product/add', 'AdminProductController@add')->middleware('checkLogin:user');
Route::post('admin/product/store', 'AdminProductController@store')->middleware('checkLogin:user');

Route::get('admin/product/update/{id}', 'AdminProductController@update')->name('admin.product.update');
Route::post('admin/product/update/store/{id}', 'AdminProductController@update_store')->name('admin.product.update.store');
Route::get('admin/product/delete/{id}','AdminProductController@delete')->name('admin.product.delete');

//route nút lọc
Route::get('client/filter', 'ClientProductController@getProductFilter');
//CATEGORY
Route::get('admin/product/add_category', 'AdminProductController@add_category')->middleware('checkLogin:user');
Route::post('admin/product/store_category', 'AdminProductController@store_category')->middleware('checkLogin:user');
Route::get('admin/product/delete_category/{category_code}', 'AdminProductController@delete_category')->name('admin.category.delete')->middleware('checkLogin:user');
//BRAND
Route::get('admin/product/add_brand', 'AdminProductController@add_brand')->middleware('checkLogin:user');
Route::post('admin/product/store_brand', 'AdminProductController@store_brand')->middleware('checkLogin:user');
Route::get('admin/product/delete_brand/{brand_code}', 'AdminProductController@delete_brand')->name('admin.brand.delete')->middleware('checkLogin:user');
//slider
Route::get('admin/slider/show','AdminSliderController@index');
Route::post('admin/slider/update','AdminSliderController@update');


//Comment management
Route::get('admin/product/update/delete/comment/{product_id}/{id}', 'AdminCommentManagementController@delete');
Route::get('admin/product/update/delete/commentrep/{product_id}/{id}', 'AdminCommentManagementController@delete_rep');
//Customers
Route::get('admin/customer_order','CustomerController@show_order');
Route::get('admin/customer_commenter','CustomerController@show_commenter');


Route::get('login', 'AccountController@login');

//USER

Route::post('checkLogin', 'AccountController@checkLogin');

Route::get('relogin', function () {
    return view('admin.user.relogin');
});

Route::get('addUser', function () {
    return view('admin.user.createUser');
})->middleware('checkLogin:user');
Route::get('admin/user/logout', function (Request $request) {
    $request->session()->flush();
    return view('admin.user.login');
});

Route::get('createUser', 'AccountController@addUser');
Route::get('admin/user', 'AdminUserController@index');
//root nut delete nhan vien
Route::get('admin/user/{id}', 'AdminUserController@delete')->middleware('checkLogin:user');
//rout nut update nhan vien
Route::get('admin/update/{id}', 'AdminUserController@update')->middleware('checkLogin:user');
Route::post('admin/postUpdate/{id}', 'AdminUserController@postUpdate')->middleware('checkLogin:user');


//NEWS
Route::get('admin/add_news', 'AdminNewsController@index')->middleware('checkLogin:user');
Route::post('admin/store_news', 'AdminNewsController@store_news')->middleware('checkLogin:user');

Route::get('admin/list_news', 'AdminNewsController@list_news')->middleware('checkLogin:user');

Route::get('admin/news/update/{id}', 'AdminNewsController@update')->middleware('checkLogin:user');
Route::post('admin/news/update/store/{id}', 'AdminNewsController@update_store')->middleware('checkLogin:user');

Route::get('admin/news/delete/{id}', 'AdminNewsController@delete')->middleware('checkLogin:user');

Route::get('news', 'ClientPostController@news')->middleware('checkLogin:user');
Route::get('news/show/{id}', 'ClientPostController@detail')->middleware('checkLogin:user');





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
Route::post('product/filter', 'ClientProductController@filter');
Route::get('product/show/cat/{category}', 'ClientProductController@show_by_category');
//=====product detail

Route::get('product/show/{id}', 'ClientProductController@detail')->name('product.show.detail');
//----CONTACT
Route::get('contact', function () {
    return view('client.contact.contact');
});
//----INTRO
Route::get('check', 'ClientOrderController@check');
Route::post('check/order','ClientOrderController@check_order');
//----NEWS

//CART
Route::get('cart/show', 'ClientCartController@show');
Route::get('cart/add/{id}', 'ClientCartController@add')->name('cart.add');
Route::post('cart/store', 'ClientCartController@store')->name('cart.store');
Route::get('cart/remove/{rowId}', 'ClientCartController@remove')->name('cart.remove');
Route::get('cart/destroy', 'ClientCartController@destroy')->name('cart.destroy');
Route::post('cart/update', 'ClientCartController@update')->name('cart.update');
Route::post('/home/find', 'ClientProductController@find')->name('home.find');
//PAYMENT
Route::get('order/add', 'ClientOrderController@index');
Route::post('order/store', 'ClientOrderController@store');
Route::get('order/success/{order_id}', 'ClientOrderController@success')->name('order.success');
Route::get('search/order', function(){
    return view('client.cart.checkorder');
});
//Mail
Route::post('/sendemailcontact/send', 'ContactusMailController@send');
//Comment
Route::post('client/comment', 'CommentController@comment');
Route::post('client/repcomment', 'CommentController@replyCmt');

//--------------*****----------------
#********CLIENT ROUTES - ends *******

// test