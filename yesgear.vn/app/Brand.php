<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    //
    protected $fillable =['code','name'];
    protected $primaryKey = 'code';
    public $incrementing = false;
    public function product(){
        return $this->hasMany('App\Product');
    }
}
