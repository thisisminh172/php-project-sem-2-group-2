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
    return view('product.show');
});

Route::get('product/show', function () {
    return view('product.show');
});
Route::get('product/detail', function () {
    return view('product.detail');
});
Route::get('admin', function () {
    return view('admin.home');
});