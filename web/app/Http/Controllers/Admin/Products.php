<?php

namespace App\Http\Controllers\Admin;

use DB;
use App\Http\Requests;

class Products extends Admin {

    public $module = 'products';

    public function sync()
    {
        /* Brands
        $file = file_get_contents('brands.json');
        $data = json_decode($file);
        foreach($data as $item)
        {
            DB::table('products')->where('id', $item->product_id)->update([
                'brand_name' => $item->brand_name,
                'brand_slug' => $item->brand_slug
            ]);
        }
        exit('synced');
         */
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
        foreach (scandir('catalog') as $catalog) {
            if ($catalog == '.' || $catalog == '..')
                continue;
            $file = file_get_contents('catalog/'.$catalog);
            $data = json_decode($file, true);
            foreach($data as $id => $item)
            {
                if(DB::table($this->module)->find($id))
                {
                    unset($data[$id]);
                }
                else
                {
                    $data[$id]['images'] = json_encode($item['images']);
                    $data[$id]['options'] = json_encode($item['options']);
                }
            }
            DB::table($this->module)->insert($data);
        }
        exit('synced');
        */
        
    }

}