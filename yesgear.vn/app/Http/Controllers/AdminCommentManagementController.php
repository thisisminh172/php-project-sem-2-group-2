<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminCommentManagementController extends Controller
{
    public function show(){
        $comments = DB::table('comments')->get();
        return view('admin.comment.comment_management')->with(['comments' => $comments]);
    }

}
