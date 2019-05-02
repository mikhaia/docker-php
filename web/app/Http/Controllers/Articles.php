<?php

namespace App\Http\Controllers;

use DB;

class Articles extends Controller
{
    public function index()
    {
        $page = DB::table('pages')->where('url', 'articles')->first();
        $items = DB::table('articles')->where('public', 1)->get();
        return view('articles', [
            'page' => $page,
            'items' => $items
        ]);
    }

    public function show($url)
    {
        $item = DB::table('articles')->where('public', 1)->where('url', $url)->first();
        return view('articles_show', [
            'page' => $item,
            'item' => $item
        ]);
    }
}