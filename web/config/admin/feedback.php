<?php

return [
    'list' => [
        'id' => ['type' => 'id'],
        'name' => ['type' => 'text'],
        'phone' => ['type' => 'text'],
        'mess' => ['type' => 'text'],
        'link' => ['type' => 'text'],
        'created_at' => ['type' => 'date'],
        'actions' => ['type' => 'actions', 'btns' => ['delete']]
    ]
];