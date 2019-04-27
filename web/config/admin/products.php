<?php

return [
    'list' => [
        'id' => ['type' => 'id'],
        'title' => ['type' => 'text'],
        'url' => ['type' => 'text'],
        // 'public' => ['type' => 'checkbox'],
        'actions' => ['type' => 'actions', 'btns' => ['edit', 'delete']]
    ],

    'form' => [
        'title' => ['type' => 'text'],
        'url' => ['type' => 'text'],
        'price' => ['type' => 'text'],
        'old_price' => ['type' => 'text'],
        'summary' => ['type' => 'wysiwyg'],
        'description' => ['type' => 'wysiwyg'],
        // 'public' => ['type' => 'checkbox'],
        'actions' => ['type' => 'actions', 'btns' => ['save', 'back']]
    ]
];