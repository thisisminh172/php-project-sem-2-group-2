<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Order;
use App\OrderDetail;
use Illuminate\Support\Str;
use App\Mail\PaymentMail;
use Illuminate\Support\Facades\Mail;


class ClientOrderController extends Controller
{
    //
    public function index(){
        return view('client.cart.add');
    }
    public function store(Request $request){

        if(Cart::count()>0){
            $info = $request->all();
            $t=Str::random(8);
            $t= Str::upper($t);
            $order = new Order($info);
            $order->payment_content = $t;
            $order->save();
            foreach(Cart::content() as $row){
                $order_detail = new OrderDetail();
                $order_detail->order_id = $order->id;
                $order_detail->product_id = $row->id;
                $order_detail->quantity = $row->qty;
                $order_detail->price = $row->total;
                $order_detail->save();
            }
            $data=array(
                'name'=> $order->name,
                'phone'=>$order->phone,
                'email'=>$order->email,
                'address'=>$order->address,
                'payment_content'=>$order->payment_content,
                'total'=>Cart::total(),
                'home_page'=>url('home')
            );

            Mail::to($order->email)->send(new PaymentMail($data));
            Cart::destroy();
            return redirect()->route('order.success',$order->id);
        }
        return view('client.product.show');
    }

    public function success($order_id){
        $info = Order::find($order_id);
        // $detail = OrderDetail::where('order_id',$order_id)->get();
        return view('client.cart.payment_success',compact('info'));
    }

    public function check(){
        return view('client.pages.check');
    }

    public function check_order(Request $request){
        $payment_content = $request->input('payment_content');
        // $order="";
        $order = Order::where('payment_content',$payment_content)->first();
        // dd($order);
        if(isset($order)){
            return redirect()->action('ClientOrderController@check')->with('order',$order);
        }else{
            return redirect()->action('ClientOrderController@check')->with('fail','Không tìm thấy mã đơn hàng này!');

        }
    }
}
