<?php

namespace App\Http\Controllers;

use App\CustomClass\ShowProductWithCondition;
use App\Product;
use DB;
use Illuminate\Http\Request;

class ClientProductController extends Controller
{
    //goi truoc khi

    //viet ham tu day
    public function index()
    {
        $p = new ShowProductWithCondition();
        $products = Product::all();
        $headphones = $p->show_headphone();
        $keyboards = $p->show_keyboard();
        $mouses = $p->show_mouse();
        return view('client.home.home')->with(['products' => $products, 'headphones' => $headphones, 'keyboards' => $keyboards, 'mouses' => $mouses]);
    }

    public function show()
    {
        $products = Product::all();
        return view('client.product.show')->with(['products' => $products]);
    }

    public function detail($id)
    {
        $product = Product::find($id);
        $images = json_decode($product->image_url);
        return view('client.product.detail')->with(['product'=>$product,'images'=>$images]);
    }

    public function find(Request $request)
    {
        if ($request->get('query')) {
            $query = $request->get('query');
            $data = Product::where('name', 'like', "%{$query}%")->get();
            $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
            foreach ($data as $row) {
                $page_url = url("product/show/{$row->id}");
                $output .= '<li><a href="' . $page_url . '">' . $row->name . '</a></li>';
            }
            $output .= '</ul>';
            echo $output;
        }
    }

}
