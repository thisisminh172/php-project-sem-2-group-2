<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;

class AdminSliderController extends Controller
{
    //
    public function index(){
        return view('admin.page.slider');
    }
    public function update(Request $request){
        $input = $request->all();
        $sliders = Slider::find(1);
        if($request->hasFile('img1')){
            $file_1 = $request->file('img1');
            $file_1_name;
        }
    }
}
