<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Commenter;
use App\Order;
use DB;

class CustomerController extends Controller
{
    public function show_order(){
        $customers_order = DB::table('orders')
        ->select('email')
        ->groupBy('email')
        ->get();
        return view('admin.customerlist.customer_order')->with('customers_order',$customers_order);
    }

    public function show_commenter(){
        $customers_comment = DB::table('commenters')
        ->select('email')
        ->groupBy('email')
        ->get();
        return view('admin.customerlist.customer_commenter')->with('customers_comment',$customers_comment);
    }
    
}