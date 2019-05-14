<?php

return [
    'list' => [
        'id' => ['type' => 'id'],
        'title' => ['type' => 'text'],
        'url' => ['type' => 'text'],
        'public' => ['type' => 'checkbox'],
        'image' => ['type' => 'text'],
        'actions' => ['type' => 'actions', 'btns' => ['edit', 'delete']]
    ],

    'form' => [
        'title' => ['type' => 'text'],
        'url' => ['type' => 'text'],
        'public' => ['type' => 'checkbox'],
        'image' => ['type' => 'image'],
        'actions' => ['type' => 'actions', 'btns' => ['save', 'back']]
    ]
];