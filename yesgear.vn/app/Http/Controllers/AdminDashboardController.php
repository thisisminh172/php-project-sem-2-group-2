<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\OrderDetail;
use App\Product;
use App\CustomClass\ShowOrderWithCondition;

class AdminDashboardController extends Controller
{
    //
    public function index(){
        $t = new ShowOrderWithCondition;
        $successed_orders = $t->show_order_by_status('successed')->count();
        $waiting_orders = $t->show_order_by_status('waiting')->count();
        $canceled_orders = $t->show_order_by_status('canceled')->count();
        $orders = $t->show_order_by_status('successed');

        $total=0;
        foreach($orders as $order){
            $order_details = Order::find($order->id)->order_detail;
            foreach($order_details as $order_detail){
                $total+=$order_detail->price;
            }
        }
        // $products = array(array());

        $products_less_than_10 = Product::where('quantity','<','10')->get();
        // dd($products_less_than_10);
        foreach($products_less_than_10 as $product){

            // dd($products);
            $temp = 0;
            $order_details = Product::find($product->id)->order_detail;
            foreach($order_details as $order_detail){
                $temp += $order_detail->quantity;
                // $products[$product->id]['sale'] = $temp;
            }

            $products[] = array(
                    'id'=>$product->id,
                    'name'=>$product->name,
                    'quantity'=>$product->quantity,
                    'sale'=>$temp
                );
        }
        // dd($products);
        // $soluongorder = Product::find()->order_detail;

        return view('admin.dashboard.dashboard',compact('successed_orders','waiting_orders','canceled_orders','total','products'));
    }


}
