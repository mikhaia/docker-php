<?php

namespace App\Http\Controllers;

use DB;
use Mail;
use Input;

class Cart extends Controller
{
    public $shipping = [
        1 => 500,
        2 => 700,
        3 => 700,
        4 => 500,
        5 => 0,
        6 => 0
    ];

    public function index()
    {
        $shipping_id = 1;
        $session_id = session_id();
        $items = DB::table('cart')->where('session_id', $session_id)->get();
        foreach($items as $item)
        {
            $item->product = DB::table('products')->find($item->product_id);
        }
        return view('cart', [
            'items' => $items,
            'page' => (object)['title' => 'Корзина'],
            'shipping_id' => $shipping_id,
            'shipping_price' => $this->shipping[$shipping_id]
        ]);
    }

    public function checkoutone()
    {
        $shipping_id = Input::get('shipping_id');
        if(!$shipping_id)
            $shipping_id = 1;
        $session_id = session_id();
        $items = DB::table('cart')->where('session_id', $session_id)->get();
        foreach($items as $item)
        {
            $item->product = DB::table('products')->find($item->product_id);
        }
        return view('cart', [
            'items' => $items,
            'page' => (object)['title' => 'Корзина'],
            'shipping_id' => $shipping_id,
            'shipping_price' => $this->shipping[$shipping_id]
        ]);
    }

    public function order()
    {
        $customer = Input::get('customer');
        $data['name'] = $customer['firstname'];
        $data['phone'] = $customer['phone'];
        $data['email'] = $customer['email'];
        $data['products'] = json_encode(Input::get('quantity'));
        $data['delivery_type'] = $delivery_type = Input::get('shipping_id');
        $delivery = Input::get('customer_'.$delivery_type);
        $data['delivery_city'] = $delivery['address.shipping']['city'];
        $data['delivery_address'] = $delivery['address.shipping']['street'];
        $data['comment'] = Input::get('comment');
        $data['session_id'] = session_id();

        DB::table('orders')->insert($data);
        session_destroy();
        session_start();

        Mail::send('emails.orders', $data, function ($message) {
            $message->to('exwolfram@gmail.com')->cc('chronokz@yandex.kz')->subject('Новый заказ!');
        });

        Mail::send('emails.orders', $data, function ($message) use ($data) {
            $message->to($data['email'], $data['name'])->subject('Ваш заказ');
        });

        return response()->json(['status' => 'ok', 'data' => ['status' => true]]);
    }

    public function success()
    {
        return view('success');
    }

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