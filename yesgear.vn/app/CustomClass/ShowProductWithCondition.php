<?php
namespace App\CustomClass;
use App\Product;

class ShowProductWithCondition
{
    public function show_headphone(){
        $products = Product::where('category_code','tn')->orderBy('id','desc')->limit(4)->get();
        return $products;
    }
    public function show_keyboard(){
        $products = Product::where('category_code','bp')->orderBy('id','desc')->limit(4)->get();
        return $products;
    }
    public function show_mouse(){
        $products = Product::where('category_code','ch')->orderBy('id','desc')->limit(4)->get();
        return $products;
    }

}
?>
