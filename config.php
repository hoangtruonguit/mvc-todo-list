<?php

return [
    'database' => [
        'dbname' => 'todo_lists',
        'username' => 'root',
        'password' => '',
        'driver' => 'mysql',
        'host' => '127.0.0.1',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ],
    ],
    'status' =>[
        1 => 'Planing',
        2 => 'Doing',
        3 => 'Completed'
    ],
    'DEBUG' => true
];