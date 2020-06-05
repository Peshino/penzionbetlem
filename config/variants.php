<?php

return [
    'variant_1' => [
        'name' => env('SITE_VARIANT_1_NAME', 'penzion'),
        'route_prefix' => env('SITE_VARIANT_1_ROUTE_PREFIX', ''),
        'route_prefix_dash' => env('SITE_VARIANT_1_ROUTE_PREFIX_DASH', ''),
    ],

    'variant_2' => [
        'name' => env('SITE_VARIANT_2_NAME', 'chalupy'),
        'route_prefix' => env('SITE_VARIANT_2_ROUTE_PREFIX', 'chalupy'),
        'route_prefix_dash' => env('SITE_VARIANT_2_ROUTE_PREFIX_DASH', 'chalupy-'),
    ],

    'name' => '',

    'route_prefix' => '',

    'route_prefix_dash' => '',
];
