<?php

return [
    'list' => [
        'id' => ['type' => 'id'],
        'name' => ['type' => 'text'],
        'phone' => ['type' => 'text'],
        'email' => ['type' => 'text'],
        'delivery_type' => ['type' => 'text'],
        'delivery_city' => ['type' => 'text'],
        'delivery_address' => ['type' => 'text'],
        'comment' => ['type' => 'text'],
        'created_at' => ['type' => 'date'],
        'actions' => ['type' => 'actions', 'btns' => ['edit']]
    ],

    'form' => [
        'id' => ['type' => 'text'],
        'name' => ['type' => 'text'],
        'phone' => ['type' => 'text'],
        'email' => ['type' => 'text'],
        'delivery_type' => ['type' => 'text'],
        'delivery_city' => ['type' => 'text'],
        'delivery_address' => ['type' => 'text'],
        'products' => ['type' => 'product-list'],
        'session_id' => ['type' => 'text'],
        'comment' => ['type' => 'text'],
        'created_at' => ['type' => 'date'],
        'actions' => ['type' => 'actions', 'btns' => ['back']]
    ]
];