<?php

return [
    'stripe' => [
        'enabled' => (bool) env('STRIPE_ENABLED', false),
        'pub_key' => env('STRIPE_PUB_KEY'),
        'private_key' => env('STRIPE_PUB_KEY')
    ]
];
