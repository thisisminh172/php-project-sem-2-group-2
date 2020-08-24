<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Order;
use App\OrderDetail;

class ClientOrderController extends Controller
{
    //
    public function index(){
        return view('client.cart.add');
    }
    public function store(){
        return "chưa xong";
        // if(Cart::count()>0){

        //     // foreach(Cart::content() as $item){

        //     // }
        // }
    }
}
