<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Comment;
use App\CommentRep;

class AdminCommentManagementController extends Controller
{
    public function delete($product_id, $id)
    {
        $comment = Comment::find($id);
        $comment->delete();
        return redirect('admin/product/update/'.$product_id)->with('success','Xóa bình luận thành công!');
    }
    public function delete_rep($product_id, $id){
        $comment_rep = CommentRep::find($id);
        $comment_rep->delete();
        return redirect()->action('AdminProductController@update',$product_id)->with('success','Xóa bình luận thành công!');
    }

}
