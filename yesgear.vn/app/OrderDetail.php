<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    //
    public function order(){
        return $this->belongsTo('App\Order');
    }

    public function product(){
        return $this->hasOne('App\Product');
    }


}
