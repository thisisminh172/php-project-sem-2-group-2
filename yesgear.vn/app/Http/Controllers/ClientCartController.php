<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Product;

class ClientCartController extends Controller
{
    ### Phần cart được dùng thư viện hardevine/LaravelShoppingCart
    ### link: https://github.com/hardevine/LaravelShoppingcart#example
    public function show()
    {
        return view('client.cart.show');
    }

    public function add(Request $reques,$id)
    {
        // Cart::destroy();
        $product = Product::find($id);
        // return $product;
        Cart::add([
            'id' =>$product->id,
            'name' => $product->name,
            'qty' => 1,
            'price' => $product->price,
            'options' => ['thumbnail' => $product->thumbnail]
        ]);

        // return Cart::content();
        return redirect('cart/show');
    }
    public function remove($rowId){
        Cart::remove($rowId);
        return redirect('cart/show');
    }

    public function destroy(){
        Cart::destroy();
        return redirect('cart/show');
    }

    public function update(Request $request){
        // dd($request->all());
        $data = $request->get('qty');
        foreach($data as $k=>$v){
            Cart::update($k,$v);
        }
        return redirect('cart/show');

    }

}
