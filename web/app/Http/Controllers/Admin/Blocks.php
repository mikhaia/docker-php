<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use DB;

class Blocks extends Admin {

    public $module = 'blocks';


    public function refresh() {
        $block_path = '../resources/views/blocks/';
        $block_ext = '.blade.php';
        foreach(glob($block_path.'*'.$block_ext) as $block)
        {
            $block = str_replace($block_path, '', $block);
            $block = str_replace($block_ext, '', $block);

            if(!DB::table($this->module)->where('view', $block)->count())
            {
                DB::table($this->module)->insert([
                    'name' => ucwords(str_replace(['-', '_'], ' ', $block)),
                    'view' => $block
                ]);
            }
        }
        return back();
    }

}