<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        DB::table('categories')->insert([
            ['code' => 'tn', 'name' => 'tai nghe'],
            ['code' => 'bp', 'name' => 'bàn phím'],
            ['code' => 'ch', 'name' => 'chuột']
        ]);
        DB::table('brands')->insert([
            ['code' => 'rz', 'name' => 'razor'],
            ['code' => 'lt', 'name' => 'logitech'],
            ['code' => 'du', 'name' => 'dareu'],
            ['code' => 'as', 'name' => 'asus'],
            ['code' => 'cs', 'name' => 'corsair'],
            ['code' => 'ed', 'name' => 'e-dra'],
            ['code' => 'ss', 'name' => 'steelseries']
        ]);
        DB::table('sliders')->insert([
            'img1'=>'uploads/hinh-slider.jpg',
            'img2'=>'uploads/hinh-slider1.jpg',
            'img3'=>'uploads/hinh-slider2.png',
            'img4'=>'uploads/hinh-slider3.jpg',
            'img5'=>'uploads/hinh-slider4.jpg'
            ]);

    }
}
