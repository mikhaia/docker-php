<?php

return [
    'list' => [
        'id' => ['type' => 'id'],
        'name' => ['type' => 'text'],
        'actions' => ['type' => 'actions', 'btns' => ['edit', 'delete']]
    ],

    'form' => [
        'name' => ['type' => 'text'],
        'actions' => ['type' => 'actions', 'btns' => ['save', 'back']]
    ]
];