<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class Order extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('orders')->insert([
            'name' => 'Lê Minh',
            'email' => 'thisisminh172@gmail.com',
            'phone' => '0901496630',
            'address' => '1235/50 Hoàng Sa, phường 5, Quận Tân Bình, CMT8',
            'payment_content' => 'WESDOIKJ',
            'status' => 'waiting'
        ]);
        DB::table('order_details')->insert([
            ''
        ]);
    }
}
