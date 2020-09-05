<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Comment;
use App\CommentRep;
use App\Product;
use App\CustomClass\ChangeFileName;

class AdminCommentManagementController extends Controller
{
    public function show(){

        $comments = Comment::orderBy('id','desc')->paginate(5);
        return view('admin.comment.admincomment')->with(['comments'=>$comments]);
    }
        

    public function delete($id)
    {
        $comment = Comment::find($id);
        $comment->delete();
        return redirect()->action('AdminCommentManagementController@show')->with('success','Xóa bình luận thành công!');
    }
    public function delete_rep($id){
        $comment_rep = CommentRep::find($id);
        $comment_rep->delete();
        return redirect()->action('AdminCommentManagementController@show')->with('success','Xóa bình luận thành công!');

    }
}