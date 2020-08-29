<?php
namespace App\CustomClass;
use App\Product;
use App\Order;
use App\OrderDetail;

class ShowOrderWithCondition
{
    public function show_order_by_status($status){
        $orders = Order::where('status',$status)->get();
        return $orders;
    }


}
?>
