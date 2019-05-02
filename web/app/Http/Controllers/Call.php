<?php

namespace App\Http\Controllers;

use DB;
use Input;

class Call extends Controller
{
    public function send()
    {
        $data = [
            'name' => Input::get('bellLight__name'),
            'phone' => Input::get('bellLight__phone'),
            'mess' => Input::get('bellLight__mess'),
            'link' => Input::get('bellLight__link'),
            // 'name' => Input::get('bellLight__antispam'),
            // 'name' => Input::get('policy_checkbox'),
        ];

        DB::table('feedback')->insert($data);

        return response()->json(['status' => 'ok', 'data' => ['status' => true]]);
    }
}