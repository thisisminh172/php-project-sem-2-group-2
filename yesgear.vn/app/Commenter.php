<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commenter extends Model
{
    //
    public function comment(){
        return $this->hasMany('App\Comment');
    }
    public function comment_reply(){
        return $this->hasMany('App\CommentRep');
    }
}
