<?php
return [
    'isProduction' => env('MIDTRANS_IS_PRODUCTION', false),
    'serverKey' => env('MIDTRANS_SERVER_KEY', 'SB-Mid-server-7QJ0J6Q1Q1J9Q1J9Q1J9Q1J9'),
    'clientKey' => env('MIDTRANS_CLIENT_KEY', 'SB-Mid-client-1Q1J9Q1J9Q1J9Q1J9Q1J9Q1J9'),
    'isSanitized' => env('MIDTRANS_IS_SANITIZED', true),
    'is3ds' => env('MIDTRANS_IS_3DS', true),
];
