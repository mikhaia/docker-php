<?php

namespace App\Http\Controllers;

use DB;
use Input;

class Cart extends Controller
{
    public function add()
    {
        $session_id = session_id();
        $product_id = Input::get('product_id');


        // Save results
        $cart = DB::table('cart')->where('session_id', $session_id)->where('product_id', $product_id)->first();
        if($cart)
            DB::table('cart')->where('session_id', $session_id)->where('product_id', $product_id)->update(['product_count' => $cart->product_count+1, 'updated_at' => date("Y-m-d H:i:s")]);
        else
            DB::table('cart')->insert(['session_id' => $session_id, 'product_id' => $product_id, 'product_count' => 1]);

        // Show results
        $items = DB::table('cart')->where('session_id', $session_id)->get();
        $total = 0;
        $count = 0;
        foreach($items as $item)
        {
            $product = DB::table('products')->find($item->product_id);
            $total += $product->price*$item->product_count;
            $count += $item->product_count;
        }

        $data = [
            'item_id' => $product_id,
            'total' => $total.' руб.',
            'discount' => 0,
            'discount_numeric' => 0,
            'discount_coupon' => '0 руб.',
            'count' => $count
        ];

        $total = number_format($total, 0, ' ', ' ');

        return response()->json(['status' => 'ok', 'data' => $data]);
    }
}