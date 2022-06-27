<?php

return [

   'default' => 'clients',

   'connections' => [

        'clients' => [
            'driver'    => 'mysql',
            'host'      => env('DB_CLIENTS_HOST'),
            'port'      => env('DB_CLIENTS_PORT'),
            'database'  => env('DB_CLIENTS_DATABASE'),
            'username'  => env('DB_CLIENTS_USERNAME'),
            'password'  => env('DB_CLIENTS_PASSWORD'),
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
            'strict'    => false,
         ],

        'menudb' => [
            'driver'    => 'mysql',
            'host'      => env('DB_MENU_HOST'),
            'port'      => env('DB_MENU_PORT'),
            'database'  => env('DB_MENU_DATABASE'),
            'username'  => env('DB_MENU_USERNAME'),
            'password'  => env('DB_MENU_PASSWORD'),
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
            'strict'    => false,
        ],

        'sitedb' => [
            'driver'    => 'mysql',
            'host'      => env('DB_SITE_HOST'),
            'port'      => env('DB_SITE_PORT'),
            'database'  => env('DB_SITE_DATABASE'),
            'username'  => env('DB_SITE_USERNAME'),
            'password'  => env('DB_SITE_PASSWORD'),
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
            'strict'    => false,
        ],
    ],
];