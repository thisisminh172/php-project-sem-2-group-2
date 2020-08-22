<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\CustomClass\ShowProductWithCondition;

class ClientProductController extends Controller
{
    //goi truoc khi


    //viet ham tu day
    public function index(){
        $p = new ShowProductWithCondition;
        $products = Product::all();
        $headphones = $p->show_headphone();
        $keyboards = $p->show_keyboard();
        $mouses = $p->show_mouse();
        return view('client.home.home')->with(['products'=>$products,'headphones'=>$headphones,'keyboards'=>$keyboards,'mouses'=>$mouses]);
    }
    public function show(){
        $products = Product::all();
        return view('client.product.show')->with(['products'=>$products]);
    }
    public function detail(){

    }

    public function find_product(){

    }

}
