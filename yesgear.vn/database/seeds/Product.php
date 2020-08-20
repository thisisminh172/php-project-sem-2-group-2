<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Product extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('products')->insert([
            'name'=> 'tai nghe 1',
            'brand'=>'razor',
            'category'=>'headset',
            'describe'=>'tai nghe gaming',
            'price'=> 2000000,
            'quantity'=>10
        ]);
        DB::table('products')->insert([
            'name'=> 'ban phim 1',
            'brand'=>'logitech',
            'category'=>'keyboard',
            'describe'=>'ban phim gaming',
            'price'=> 5000000,
            'quantity'=>140
        ]);
        DB::table('products')->insert([
            'name'=> 'chuot 1',
            'brand'=>'razor',
            'category'=>'mouse',
            'describe'=>'chuot gaming',
            'price'=> 1500000,
            'quantity'=>100
        ]);

    }
}
