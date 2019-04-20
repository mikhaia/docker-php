<?php

return [
    'list_actions' => ['refresh_blocks'],

    'list' => [
        'id' => ['type' => 'id'],
        'name' => ['type' => 'text'],
        'actions' => ['type' => 'actions', 'btns' => ['edit', 'delete']]
    ],

    'form' => [
        'name' => ['type' => 'text'],
        'values' => ['type' => 'block-form'],
        'actions' => ['type' => 'actions', 'btns' => ['save', 'back']]
    ]
];