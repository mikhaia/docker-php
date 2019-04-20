<?php

namespace App\Http\Controllers;

use DB;

class Index extends Controller
{
    public function url()
    {
        $url = substr($_SERVER['REQUEST_URI'], 1);
        if (!$url)
            $url = 'index';
        return $url;
    }

    public function notFound()
    {
        return abort(404);
    }

    public function index()
    {
        $url = $this->url();
        $page = DB::table('pages')->where('url', $url)->first();
        if (!$page)
        {
            abort(404);
        }
        else
        {
            $block_ids = explode(',', $page->blocks);
            $block_get = DB::table('blocks')->whereIn('id', $block_ids)->get();
            $page_values = json_decode($page->values, true);
            $blocks = [];
            $values = [];
            foreach($block_get as $block)
            {
                $blocks[$block->id] = $block;
                $block_values = json_decode($block->values, true);
                foreach($block_values as $id => $val)
                {
                    $values[$block->view][$id] = $block_values[$id];
                    if(isset($page_values[$block->view][$id]) &&
                        $page_values[$block->view][$id] &&
                        $block_values[$id] != $page_values[$block->view][$id]
                    )
                        $values[$block->view][$id] = $page_values[$block->view][$id];
                }
            }

            return view('index', [
                'block_ids' => $block_ids,
                'page' => $page,
                'blocks' => $blocks,
                'values' => $values
            ]);
        }
    }
}