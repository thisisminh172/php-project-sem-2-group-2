<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class ClientPostController extends Controller
{
    public function news()
    {
        $news = News::all();
        return view('client.pages.news')->with(['news' => $news]);
    }
    public function detail($id)
    {
        $news = News::find($id);
        return view('client.pages.news_details')->with(['news' => $news]);
    }
}