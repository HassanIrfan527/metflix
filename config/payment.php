<?php
return [
    // Add your payment configurations here
    'default_gateway' => 'Stripe', // Default payment gateway

    'stripe' => [

        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ]

];
