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
    public function list_news()
    {
        $news = News::all();
        return view('admin.news.show')->with(['news' => $news]);
    }


    public function update($id)
    {
        $u = News::where('id', intval($id))->first();
        return view('admin.news.update', ['u' => $u]);
    }

    public function update_store(Request $request, $id)
    {

        $input = $request->all();
        $title = $request->input('title');
        $thumbnail = $request->input('thumbnail');
        $content = $request->input('content');
        $u = News::where('id', intval($id))->update(['title' => $title, 'thumbnail' => $thumbnail, 'content' => $content]);
        return redirect()->action('AdminNewsController@list_news')->with('success', 'Cập nhật thành công');
    }

    public function delete($u)
    {
        News::where('id', intval($u))->delete();
        return redirect()->action('AdminNewsController@list_news')->with('success', 'Xóa thành công');
    }
}