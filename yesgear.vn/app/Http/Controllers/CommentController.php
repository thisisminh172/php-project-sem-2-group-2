<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Commenter;
use App\Comment;
use App\CommentRep;
use DB;

class CommentController extends Controller
{
    public function comment(Request $request){
        $commenter = new Commenter();
        $commenter->name = $request->post('name');
        $commenter->email = $request->post('email');
        $commenter->phone = $request->post('phone');
        $commenter->save();

        $comment = new Comment();
        $comment->commenter_id = $commenter->id;
        $comment->content = $request->post('content');
        $comment->votes = $request->post('votes');
        $comment->product_id = $request->post('product_id');
        $comment->name = $request->post('name');
        $comment->save();
        return redirect()->route('product.show.detail',$comment->product_id)->with('success','Bình luận thành công!');
    }

    public function replyCmt(Request $request){
        $rep_commenter = new Commenter();
        $rep_commenter->name = $request->post('repname');
        $rep_commenter->email = $request->post('repemail');
        $rep_commenter->phone = $request->post('repphone');
        $rep_commenter->save();
    }
}
