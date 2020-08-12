<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommentRep extends Model
{
    //
    public function comment(){
        return $this->belongsTo('App\Comment');
    }

    public function customer(){
        return $this->belongsTo('App\Customer');
    }
}
