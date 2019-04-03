<?php

return [
    'list' => [
        'id' => ['type' => 'id'],
        'name' => ['type' => 'text'],
        'group' => ['type' => 'select', 'values' => [1 => 'Admin', 0 => 'User']],
        'email' => ['type' => 'text'],
        'actions' => ['type' => 'actions', 'btns' => ['edit', 'delete']]
    ],

    'form' => [
        'name' => ['type' => 'text'],
        'group' => ['type' => 'select', 'values' => [1 => 'Admin', 0 => 'User']],
        'email' => ['type' => 'text'],
        'password' => ['type' => 'password'],
        'actions' => ['type' => 'actions', 'btns' => ['save', 'back']]
    ]
];