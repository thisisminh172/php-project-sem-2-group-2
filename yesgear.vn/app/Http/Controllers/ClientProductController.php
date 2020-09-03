<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\CustomClass\ShowProductWithCondition;
use App\OrderDetail;
use App\Product;
use App\Comment;
use App\Commenter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ClientProductController extends Controller
{
    //goi truoc khi

    //viet ham tu day
    public function index()
    {
        $p = new ShowProductWithCondition();
        $product_id_list = OrderDetail::selectRaw("COUNT('id') as number_orders, product_id")
        ->groupBy('product_id')
        ->orderBy('number_orders','desc')
        ->limit(4)
        ->get();
        $products = [];
        foreach($product_id_list as $product_id){
            $product = Product::find($product_id->product_id);
            $products[] = $product;
        }
        // dd($products);
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

        //comment function
        $comments = Comment::where('product_id', $id)->get();
        // foreach ($comments as $comment){
        //     $commenter = Comment::where('commenter_id', 'id')->commenter;
        //     return $commenter;
        //     $commenter_name = $commenter->name;
        //     $comment_detail[] = array(
        //         'name'=>$commenter_name,
        //         'content'=>$comment->content,
        //     );
        // }
        // dd($comment_detail);


        // $comments = Commenter::where('id', 'commenter_id')->get();
        // $comments = Commenter::find($id->$name)->$comments;
        return view('client.product.detail')->with(['product' => $product, 'images' => $images,'comments' => $comments]);
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
    public function filter(Request $request)
    {
        $input = $request->all();
        // dd($request->has('brand_code'));
        $temp = 0;
        $query = Product::query();
        if (isset($input['brand_code'])) {
            $query = $query->where('brand_code', $input['brand_code']);
            $temp++;
        }

        if (isset($input['category_code'])) {
            $query = $query->where('category_code' , $input['category_code']);
            $temp++;
        }
        if (isset($input['price'])) {
            if ($input['price'] == 1) {
                $query = $query->where('price','<',500000);
                $temp++;
            }
            if ($input['price'] == 2) {
                $query = $query->where('price','>=',500000)->where('price','<',3000000);
                $temp++;
            }
            if ($input['price'] == 3) {
                $query = $query->where('price','>=',3000000);
                $temp++;
            }

        }
        // $products = $query->get();

        if($temp == 0){
            $products = Product::all();
        }else{
            $products = $query->get();
        }


        $brands = Brand::all();
        $categories = Category::all();
        return view('client.product.show', compact('brands', 'products', 'categories'));
    }
}
