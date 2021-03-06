<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable =['name','thumbnail','brand_code','category_code','describe','tech_info','price','quantity','image_url'];
    public function order_detail(){
        return $this->hasMany('App\OrderDetail');
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
