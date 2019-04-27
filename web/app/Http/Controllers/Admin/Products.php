<?php

namespace App\Http\Controllers\Admin;

use DB;
use App\Http\Requests;

class Products extends Admin {

    public $module = 'products';

    public function sync()
    {
        /* Categories
        $file = file_get_contents('category.json');
        $data = json_decode($file, true);
        foreach($data as $id => $item)
        {
            if($item['parent'])
            {
                $li = DB::table('categories')->where('url', $item['parent'])->first();
                if($li)
                {
                    $item['parent'] = $li->id;
                }
            }
            DB::table('categories')->insert($item);
        }
        exit('synced');
        */
        /* Products
        $file = file_get_contents('catalog.json');
        $data = json_decode($file, true);
        foreach($data as $id => $item)
        {
            $data[$id]['images'] = json_encode($item['images']);
            $data[$id]['options'] = json_encode($item['options']);
        }
        DB::table($this->module)->insert($data);
        exit('synced');
        */
    }

}