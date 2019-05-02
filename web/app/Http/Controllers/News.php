<?php

namespace App\Http\Controllers;

use DB;

class News extends Controller
{
    public function index()
    {
        $page = DB::table('pages')->where('url', 'news')->first();
        $items = DB::table('news')->where('public', 1)->get();
        return view('news', [
            'page' => $page,
            'items' => $items
        ]);
    }

    public function show($url)
    {
        $item = DB::table('news')->where('public', 1)->where('url', $url)->first();
        return view('news_show', [
            'page' => $item,
            'item' => $item
        ]);
    }
}