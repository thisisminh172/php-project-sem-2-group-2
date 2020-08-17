<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    public function order_detail(){
        return $this->belongsTo('App\OrderDetail');
    }

    public function image(){
        return $this->hasMany('App\Image');
    }

    public function comment(){
        return $this->hasMany('App\Comment');
    }

    public function brand(){
        return $this->belongsTo('App\Brand');
    }
    public function category(){
        return $this->belongsTo('App\Category');
    }
}
