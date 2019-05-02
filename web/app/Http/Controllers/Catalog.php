<?php

namespace App\Http\Controllers;

use DB;
use Input;

class Catalog extends Controller
{
    public function category($category, $brand)
    {
        $selected_category = DB::table('categories')->where('url', '/category/'.$category.'/')->first();
        $subcategories = DB::table('categories')->where('parent', $selected_category->id)->get();
        $products = DB::table('products')->where('category_link', 'LIKE', '/category/'.$category.'/%')->paginate(30);
        $page = (object)['url' => $_SERVER['REQUEST_URI'], 'title' => $selected_category->title];

        return view('catalog', [
            'products' => $products,
            'page' => $page,
            'subcategories' => $subcategories,
            'category' => $selected_category
        ]);
    }

    public function catalog_list($category, $brand)
    {
        $selected_category = DB::table('categories')->where('url', '/category/'.$category.'/')->first();
        $subcategories = DB::table('categories')->where('parent', $selected_category->id)->get();
        $products = DB::table('products')->where('category_link', 'LIKE', '/category/'.$category.'/%')->paginate(30);

        return view('catalog_'.$_COOKIE['products_view'], [
            'products' => $products,
            'subcategories' => $subcategories,
            'category' => $selected_category
        ]);
    }

    public function brand($category, $brand)
    {
        dd($brand);

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