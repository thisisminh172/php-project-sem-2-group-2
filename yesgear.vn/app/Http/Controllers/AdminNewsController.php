<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class AdminNewsController extends Controller
{
    //
    public function index()
    {
        return view('admin.news.add');
    }
    public function store_news(Request $request)
    {
        $input = $request->all();
        News::create($input);
        return redirect()->action('AdminNewsController@index')->with('status', 'Thêm bài viết mới thành công');
    }
}