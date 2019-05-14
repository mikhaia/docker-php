<?php

namespace App\Http\Controllers;

use DB;
use Input;

class Catalog extends Controller
{
    public function category($category, $brand = '')
    {
        $selected_category = DB::table('categories')->where('url', $_SERVER['REQUEST_URI'].'/')->orderBy('url', 'desc')->first();
        $subcategories = DB::table('categories')->where('parent', $selected_category->id)->get();
        $products = DB::table('products')->where('category_link', 'LIKE', '/category/'.$category.'/%');
        if ($brand)
            $products = $products->where('brand_slug', $brand);
        $products = $products->paginate(30);
        $page = (object)['url' => $_SERVER['REQUEST_URI'], 'title' => $selected_category->title];

        return view('catalog', [
            'products' => $products,
            'page' => $page,
            'subcategories' => $subcategories,
            'category' => $selected_category
        ]);
    }

    public function catalog_list($category, $brand = '')
    {
        $selected_category = DB::table('categories')->where('url', '/category/'.$category.'/')->first();
        $subcategories = DB::table('categories')->where('parent', $selected_category->id)->get();
        $products = DB::table('products')->where('category_link', 'LIKE', '/category/'.$category.'/%');
        if ($brand)
            $products = $products->where('brand_slug', $brand);
        $products = $products->paginate(30);

        return view('catalog_'.$_COOKIE['products_view'], [
            'products' => $products,
            'subcategories' => $subcategories,
            'category' => $selected_category
        ]);
    }

    public function brand($brand)
    {
        $products = DB::table('products')->where('brand_slug', $brand)->paginate(20);
        if(!$products)
            return abort(404);
        $brand = (object)['name' => $products[0]->brand_name, 'slug' => $products[0]->brand_slug];
        return view('brand', [
            'products' => $products,
            'brand' => $brand,
            'page' => (object)['title' => $products[0]->brand_name, 'url' => true]
        ]);
    }

    public function search()
    {
        $query = Input::get('query');
        $products = DB::table('products')->where('title', 'LIKE', '%'.$query.'%')->paginate();
        return view('search', [
            'products' => $products,
            'page' => (object)['title' => $query, 'url' => true],
            'query' => $query
        ]);
    }
}