<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminOrderController extends Controller
{
    //
    public function index(){
        return view('admin.order.show');
    }
}
