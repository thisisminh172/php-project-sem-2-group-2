<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class News extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('news')->insert([
            'title' => 'Chính thức ra mắt ổ cắm điện kiêm sạc không dây, sạc nhanh 18W, giá chỉ từ 400 nghìn đồng',
            'thumbnail' => 'http://chiemtaimobile.vn/images/thumbnails/300/214/detailed/23/tin-tuc-o-cam-dien-kiem-sac-khong-day-xiaomi-ava.jpg',
            'content' => ''
        ]);
        DB::table('news')->insert([
            'title' => '',
            'thumbnail' => '',
            'content' => ''
        ]);
        DB::table('news')->insert([
            'title' => '',
            'thumbnail' => '',
            'content' => ''
        ]);
        DB::table('news')->insert([
            'title' => '',
            'thumbnail' => '',
            'content' => ''
        ]);
        DB::table('news')->insert([
            'title' => '',
            'thumbnail' => '',
            'content' => ''
        ]);
    }
}