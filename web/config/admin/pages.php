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
        'title' => ['type' => 'text'],
        'url' => ['type' => 'text'],
        'public' => ['type' => 'checkbox'],
        'actions' => ['type' => 'actions', 'btns' => ['save', 'back']]
    ]
];