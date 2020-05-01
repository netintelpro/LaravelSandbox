<?php

return [
    'credentials' => [
        'key'    => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'bucket' => env('AWS_BUCKET'),
    ],
    'region' => env('AWS_DEFAULT_REGION'),
    'version' => 'latest',

// You can override settings for specific services
    'Ses' => [
        'region' => 'us-east-2',
    ],
];
