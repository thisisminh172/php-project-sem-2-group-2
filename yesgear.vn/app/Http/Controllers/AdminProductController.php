<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Image;
use App\Brand;
use App\Category;

class AdminProductController extends Controller
{
    //show danh sach sản phẩm
    public function index(){
        $products = Product::all();
        return view('admin.product.show')->with(['products'=>$products]);
    }

    //show view add san pham moi
    public function add(){
        $brands = Brand::all();
        $categories = Category::all();
        return view('admin.product.add')->with(['brands'=>$brands,'categories'=>$categories]);
    }

    //sau khi add se luu thong tin vao db
    public function store(Request $request){
        $input = $request->all();
        if($request->hasFile('thumbnail')){
            $file = $request->file('thumbnail');
            $fileName = $file->getClientOriginalName();
            //get image type
            // $file->getClientOriginalExtension();
            //get emage size
            // $file->getSize();
            $file->move('uploads',$fileName);
            $path = 'uploads/'.$fileName;
            $input['thumbnail']= $path;
        }
        if($request->hasFile('product_image')){
            $files = $request->file('product_image');
            //tạo mảng rỗng chứa url
            $array_url = [];
            foreach($files as $file){

                $name = $file->getClientOriginalName();
                $file->move('uploads',$name);
                $path = 'uploads/'.$name;
                $array_url[]=$path;
            }
            $input['image_url']=json_encode($array_url);
        }

        Product::create($input);

        return redirect()->action('AdminProductController@add')->with('status','Thêm sản phẩm mới thành công');
    }
    public function update($id){

    }
}
