<?php

return [

    /*
     * If enabled for voyager-bread-lead package.
     */
    'enabled' => env('VOYAGER_BREAD_LEAD_ENABLED', true),

    /*
     * The config_key for voyager-bread-lead package.
     */
    'config_key' => env('VOYAGER_BREAD_LEAD_CONFIG_KEY', 'joy-voyager-bread-lead'),

    /*
     * The route_prefix for voyager-bread-lead package.
     */
    'route_prefix' => env('VOYAGER_BREAD_LEAD_ROUTE_PREFIX', 'joy-voyager-bread-lead'),

    /*
    |--------------------------------------------------------------------------
    | Controllers config
    |--------------------------------------------------------------------------
    |
    | Here you can specify voyager controller settings
    |
    */

    'controllers' => [
        'namespace' => 'Joy\\VoyagerBreadLead\\Http\\Controllers',
    ],
];
