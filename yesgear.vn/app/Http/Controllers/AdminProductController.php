<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Image;
use App\Brand;
use App\Category;
use App\CustomClass\ChangeFileName;

class AdminProductController extends Controller
{
    //show danh sach sản phẩm
    public function index(){

        $products = Product::orderBy('id','desc')->paginate(5);

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
        $cfn = new ChangeFileName;
        $input = $request->all();
        if($request->hasFile('thumbnail')){
            $file = $request->file('thumbnail');
            $fileName = $file->getClientOriginalName();
            $fileName = $cfn->change_file_name('uploads',$fileName);
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
                $name = $cfn->change_file_name('uploads',$name);
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
        $product = Product::find($id);
        $images = json_decode($product->image_url);
        $brands = Brand::all();
        $current_brand = Brand::where('code',$product->brand_code)->first();
        $categories = Category::all();
        $current_category = Category::where('code',$product->category_code)->first();
        return view('admin.product.update',compact('brands','current_brand','categories','current_category','product','images'));
    }

    public function update_store(Request $request,$id){
        $cfn = new ChangeFileName;

        $product = Product::find($id);
        $input = $request->all();

        if($request->hasFile('thumbnail')){
            $file = $request->file('thumbnail');
            $fileName = $file->getClientOriginalName();
            $fileName = $cfn->change_file_name('uploads',$fileName);
            //get image type
            // $file->getClientOriginalExtension();
            //get emage size
            // $file->getSize();
            $file->move('uploads',$fileName);
            $path = 'uploads/'.$fileName;
            $input['thumbnail']= $path;
            $product->thumbnail = $input['thumbnail'];
        }else{
            $product->thumbnail = $product->thumbnail;
        }
        if($request->hasFile('product_image')){
            $files = $request->file('product_image');
            //tạo mảng rỗng chứa url
            $array_url = [];
            foreach($files as $file){

                $name = $file->getClientOriginalName();
                $name = $cfn->change_file_name('uploads',$name);
                $file->move('uploads',$name);
                $path = 'uploads/'.$name;
                $array_url[]=$path;
            }
            $input['image_url']=json_encode($array_url);
            $product->image_url = $input['image_url'];
        }else{
            $product->image_url = $product->image_url;
        }
        $product->name = $input['name'];
        $product->brand_code = $input['brand_code'];
        $product->category_code = $input['category_code'];
        $product->price = $input['price'];
        $product->quantity = $input['quantity'];
        $product->describe = $input['describe'];
        $product->tech_info = $input['tech_info'];

        $product->save();

        return redirect()->route('admin.product.update',$id)->with('success','Cập nhật thành công');
    }


    //CATEGORY functions start>>>>>>>>>>>>
    public function add_category(){
        $categories = Category::all();
        return view('admin.product.add_category',compact('categories'));
    }

    public function store_category(Request $request){
        $category = $request->all();
        Category::create($category);
        return redirect()->action('AdminProductController@add_category')->with(['success'=>'Thêm mới loại sản phẩm thành công']);
    }
    public function delete_category($category_code){
        $category = Category::where('code',$category_code)->first();
        // return $category;
        $category->delete();
        return redirect()->action('AdminProductController@add_category')->with(['success'=>'Xóa thành công']);
    }
    //CATEGORY functions end<<<<<<<<<<<<<<<


    //BRAND functions start>>>>>>>>>>>>
    public function add_brand(){
        $brands = Brand::all();
        return view('admin.product.add_brand',compact('brands'));
    }


    public function store_brand(Request $request){
        $brand = $request->all();
        Brand::create($brand);
        return redirect()->action('AdminProductController@add_brand')->with(['success'=>'Thêm mới thương hiệu thành công']);
    }
    public function delete_brand($brand_code){
        $brand = Brand::where('code',$brand_code)->first();
        // return $category;
        $brand->delete();
        return redirect()->action('AdminProductController@add_brand')->with(['success'=>'Xóa thành công']);
    }
    //BRAND functions end<<<<<<<<<<<<<

    public function delete($id){

        $product = Product::find($id)->delete();

        return redirect()->action('AdminProductController@index')->with('success','Xóa sản phẩm thành công');
    }

}
