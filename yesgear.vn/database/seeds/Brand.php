<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class Brand extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('brands')->insert([
            ['code'=>'rz','name'=>'razor'],
            ['code'=>'lg','name'=>'logitech'],
            ['code'=>'du','name'=>'dareu'],
            ['code'=>'as','name'=>'asus'],
            ['code'=>'cs','name'=>'corsair'],
            ['code'=>'ed','name'=>'e-dra'],
            ['code'=>'ss','name'=>'steelseries'],
            ]);
    }
}
