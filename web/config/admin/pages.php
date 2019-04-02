<?php

return [
    'list' => [
        'id' => ['type' => 'id'],
        'title' => ['type' => 'text'],
        'url' => ['type' => 'text'],
        'public' => ['type' => 'checkbox'],
        'actions' => ['type' => 'actions', 'btns' => ['edit', 'delete']]
    ],

    'form' => [
        'id' => ['type' => 'id'],
        'title' => ['type' => 'text'],
        'url' => ['type' => 'text'],
        'public' => ['type' => 'checkbox']
    ]
];