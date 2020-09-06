<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Gloudemans\Shoppingcart\Facades\Cart;

class ClientCartController extends Controller
{
    ### Phần cart được dùng thư viện hardevine/LaravelShoppingCart
    ### link: https://github.com/hardevine/LaravelShoppingcart#example
    public function show()
    {
        return view('client.cart.show');
    }

    //when the customer clicks on buy now
    public function add(Request $reques, $id)
    {
        $product = Product::find($id);
        // return $product;
        Cart::add([
            'id' => $product->id,
            'name' => $product->name,
            'qty' => 1,
            'price' => $product->price,
            'options' => ['thumbnail' => $product->thumbnail]
        ]);

        // return Cart::content();
        return redirect('cart/show');
    }

    //when the customer clicks on add to cart
    public function store(Request $request)
    {
        $product_id = $request->get('product_id');
        $product = Product::find($product_id);
        // return $product;
        Cart::add([
            'id' => $product->id,
            'name' => $product->name,
            'qty' => 1,
            'price' => $product->price,
            'options' => ['thumbnail' => $product->thumbnail]
        ]);
        $result = array(
            'cartCount'=> Cart::count(),
            'message' => "Thêm sản phẩm thành công",
        );
        // dd(Cart::content());
        //xuất thì echo
        echo json_encode($result);
    }

    public function remove($rowId)
    {
        Cart::remove($rowId);
        return redirect('cart/show');
    }

    public function destroy()
    {
        Cart::destroy();
        return redirect('cart/show');
    }

    public function update(Request $request)
    {
        // dd($request->all());
        $data = $request->get('qty');
        foreach ($data as $k => $v) {
            Cart::update($k, $v);
        }
        return redirect('cart/show');

    }

}
