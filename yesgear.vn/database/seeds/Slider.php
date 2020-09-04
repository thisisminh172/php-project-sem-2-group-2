<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class Slider extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('sliders')->insert([
            'img1'=>'uploads/hinh-slider-copy.jpg',
            'img2'=>'uploads/hinh-slider1.jpg',
            'img3'=>'uploads/hinh-slider2.jpg',
            'img4'=>'uploads/hinh-slider3.jpg',
            'img5'=>'uploads/hinh-slider4.jpg',
            ]);

    }
}
