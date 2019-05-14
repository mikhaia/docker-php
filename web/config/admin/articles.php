<?php

return [
    'list' => [
        'id' => ['type' => 'id'],
        'title' => ['type' => 'text'],
        'url' => ['type' => 'text'],
        'public' => ['type' => 'checkbox'],
        'date' => ['type' => 'date'],
        'actions' => ['type' => 'actions', 'btns' => ['edit', 'delete']]
    ],

    'form' => [
        'title' => ['type' => 'text'],
        'url' => ['type' => 'text'],
        'public' => ['type' => 'checkbox'],
        'image' => ['type' => 'image'],
        'date' => ['type' => 'date'],
        'content' => ['type' => 'wysiwyg'],
        'actions' => ['type' => 'actions', 'btns' => ['save', 'back']]
    ]
];