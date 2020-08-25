<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $fillable =['name','email','phone','address','payment_content'];

    public function order_detail(){
        return $this->hasMany('App\OrderDetail');
    }
}
