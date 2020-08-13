<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    public function comment_reply(){
        return $this->hasMany('App\CommentRep');
    }

    public function product(){
        return $this->belongsTo('App\Product');
    }

    public function customer(){
        return $this->belongsTo('App\Commenter');
    }
}
