<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class Category extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->insert([
            ['code'=>'tn','name'=>'tai nghe'],
            ['code'=>'bp','name'=>'bàn phím'],
            ['code'=>'ch','name'=>'chuột']
            ]);
    }
}
