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
        $comment->votes = $request->post('rating');
        $comment->product_id = $request->post('product_id');
        $comment->name = $request->post('name');
        $comment->save();
        return redirect()->route('product.show.detail',$comment->product_id)->with('success','Bình luận thành công!');
    }

    public function replyCmt(Request $request){
        $product_id = $request->input('product_id');
        $comment_id = $request->input('comment_id');
        $commenter = new Commenter();
        $commenter->name = $request->post('repname');
        $commenter->email = $request->post('repemail');
        $commenter->phone = $request->post('repphone');
        $commenter->save();

        $rep_comment = new CommentRep();
        $rep_comment->commenter_id = $commenter->id;
        $rep_comment->comment_id = $comment_id;
        $rep_comment->content = $request->post('repcontent');
        $rep_comment->name = $commenter->name;
        $rep_comment->save();
        return redirect()->action('ClientProductController@detail',$product_id)->with('success','Bình luận thành công!');
    }
}
