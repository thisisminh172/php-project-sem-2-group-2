<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\OrderDetail;

class AdminOrderController extends Controller
{
    //
    public function index(){
        $orders = Order::all();
        return view('admin.order.show')->with('orders',$orders);
    }

    public function cancel($order_id){

    }

}
