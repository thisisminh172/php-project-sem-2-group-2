<?php

namespace App\Http\Controllers;

use App\CustomClass\ShowProductWithCondition;
use App\Product;
use App\Brand;
use App\Category;
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
        $brands = Brand::all();
        $categories = Category::all();
        return view('client.product.show')->with(['products' => $products, 'brands' => $brands, 'categories' => $categories]);
    }



    public function detail($id)
    {
        $product = Product::find($id);
        $images = json_decode($product->image_url);
        return view('client.product.detail')->with(['product' => $product, 'images' => $images]);
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
    //ham chay filter product
    public function getProductFilter(Request $request)
    {
        $product = Product::query();

        // $brand_codes = $request->get('brand_code');
        // dd($brand_codes);
        // foreach ($brand_codes as $brand_code) {
        //     echo $brand_code;
        //     $products = Product::where('brand_code', $brand_code)->get();
        // }

        if ($request->has('brand_code')) {
            $product->where('brand_code', $request->brand_code);
        }

        if ($request->has('category_code')) {
            $product->where('category_code', $request->category_code);
        }
        if ($request->has('price')) {
            $price = $request->input('price');
            if ($price == 1) {
                $product->where('price', '<', 500000);
            }
            if ($price == 2) {
                $product->where('price', '>=', 500000)
                    ->where('price', '<', 3000000);
            }
            if ($price == 3) {
                $product->where('price', '>=', 3000000);
            }
        }
        $products =  $product->get();
        $brands = Brand::all();
        $categories = Category::all();
        return view('client.product.show', ['products' => $products, 'brands' => $brands, 'categories' => $categories]);
    }
}