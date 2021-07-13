<?php

declare(strict_types=1);

return [
    'default' => env('WECHAT_APP_NAME', 'default'),

    'app' => [
        'default' => [
            'app_id' => env('WECHAT_APP_ID'),
            'app_secret' => env('WECHAT_APP_SECRET'),
            'token' => env('WECHAT_TOKEN'),
            'options' => [
                'callback_url' => env('WECHAT_CALLBACK_URL'),
            ],
        ],

        'other' => [
            'app_id' => env('WECHAT_OTHER_APP_ID'),
            'app_secret' => env('WECHAT_OTHER_APP_SECRET'),
            'token' => env('WECHAT_OTHER_TOKEN'),
            'options' => [
                'callback_url' => env('WECHAT_OTHER_CALLBACK_URL'),
            ],
        ],
    ],
];
