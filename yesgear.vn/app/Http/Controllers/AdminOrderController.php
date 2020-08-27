<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\OrderDetail;
use App\Product;

class AdminOrderController extends Controller
{
    //
    public function index(){
        $orders = Order::all();
        return view('admin.order.show')->with('orders',$orders);
    }

    public function cancel($order_id){
        $order = Order::where('id',$order_id)->first();
        $order->status = "canceled";
        $order->save();
        return redirect()->action('AdminOrderController@index');
    }

    public function success($order_id){
        $order = Order::where('id',$order_id)->first();
        $order_detail = OrderDetail::select('product_id','quantity')->where('order_id',$order_id)->get();

        foreach($order_detail as $row){
            $product = Product::find($row->product_id);
            $product->quantity = $product->quantity - $row->quantity;
            $product->save();
        }


        $order->status = "successed";
        $order->save();
        return redirect()->action('AdminOrderController@index');
    }

}
