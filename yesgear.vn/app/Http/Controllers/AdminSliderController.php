<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use App\CustomClass\ChangeFileName;


class AdminSliderController extends Controller
{
    //
    public function index(){
        $sliders = Slider::find(1);

        return view('admin.page.slider',compact('sliders'));
    }
    public function update(Request $request){
        $cfn = new ChangeFileName;

        $input = $request->all();
        $sliders = Slider::find(1);
        //hình 1
        if($request->hasFile('img1')){
            $file_1 = $request->file('img1');
            $file_1_name = $file_1->getClientOriginalName();
            $file_1_name = $cfn->change_file_name('uploads',$file_1_name);
            $file_1->move('uploads',$file_1_name);
            $path = 'uploads/'.$file_1_name;
            $sliders->img1 = $path;
        }else{
            $sliders->img1 = $sliders->img1;
        }
        //hình 2
        if($request->hasFile('img2')){
            $file_2 = $request->file('img2');
            $file_2_name = $file_2->getClientOriginalName();
            $file_2_name = $cfn->change_file_name('uploads',$file_2_name);
            $file_2->move('uploads',$file_2_name);
            $path = 'uploads/'.$file_2_name;
            $sliders->img2 = $path;
        }else{
            $sliders->img2 = $sliders->img2;
        }
        //hình 3
        if($request->hasFile('img3')){
            $file_3 = $request->file('img3');
            $file_3_name = $file_3->getClientOriginalName();
            $file_3_name = $cfn->change_file_name('uploads',$file_3_name);
            $file_3->move('uploads',$file_3_name);
            $path = 'uploads/'.$file_3_name;
            $sliders->img3 = $path;
        }else{
            $sliders->img3 = $sliders->img3;
        }
        //hình 4
        if($request->hasFile('img4')){
            $file_4 = $request->file('img4');
            $file_4_name = $file_4->getClientOriginalName();
            $file_4_name = $cfn->change_file_name('uploads',$file_4_name);
            $file_4->move('uploads',$file_4_name);
            $path = 'uploads/'.$file_4_name;
            $sliders->img4 = $path;
        }else{
            $sliders->img4 = $sliders->img4;
        }
        //hình 5
        if($request->hasFile('img5')){
            $file_5 = $request->file('img5');
            $file_5_name = $file_5->getClientOriginalName();
            $file_5_name = $cfn->change_file_name('uploads',$file_5_name);
            $file_5->move('uploads',$file_5_name);
            $path = 'uploads/'.$file_5_name;
            $sliders->img5 = $path;
        }else{
            $sliders->img5 = $sliders->img5;
        }
        $sliders->save();
        return redirect()->action('AdminSliderController@index');
        //view('admin.page.slider')->with('success','Thay đổi hình slider thành công');

    }
}
