<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Commenter;
use App\Order;
use DB;

class CustomerController extends Controller
{
    public function show(){
        $customers_order = DB::table('orders')
        ->distinct('email')->get();
        $customers_comment = Commenter::all();
        return view('admin.customerlist.customer')->with(['customers_order'=>$customers_order, 'customers_comment'=>$customers_comment]);
    }
}
