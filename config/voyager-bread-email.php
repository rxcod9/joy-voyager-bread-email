<?php

return [

    /*
     * If enabled for voyager-bread-email package.
     */
    'enabled' => env('VOYAGER_BREAD_EMAIL_ENABLED', true),

    /*
     * The config_key for voyager-bread-email package.
     */
    'config_key' => env('VOYAGER_BREAD_EMAIL_CONFIG_KEY', 'joy-voyager-bread-email'),

    /*
     * The route_prefix for voyager-bread-email package.
     */
    'route_prefix' => env('VOYAGER_BREAD_EMAIL_ROUTE_PREFIX', 'joy-voyager-bread-email'),

    /*
    |--------------------------------------------------------------------------
    | Controllers config
    |--------------------------------------------------------------------------
    |
    | Here you can specify voyager controller settings
    |
    */

    'controllers' => [
        'namespace' => 'Joy\\VoyagerBreadEmail\\Http\\Controllers',
    ],
];
