<?php

declare(strict_types=1);

return [
    'default' => env('WECHAT_APP_NAME', 'default'),

    'app' => [
        'default' => [
            'app_id' => env('WECHAT_APP_ID'),
            'app_secret' => env('WECHAT_APP_SECRET'),
            'token' => env('WECHAT_TOKEN'),
            'tencent_ai_app_id' => env('TENCENT_AI_APP_ID'),
            'tencent_ai_app_key' => env('TENCENT_AI_APP_KEY'),
        ],

        'other' => [
            'app_id' => env('WECHAT_OTHER_APP_ID'),
            'app_secret' => env('WECHAT_OTHER_APP_SECRET'),
            'token' => env('WECHAT_OTHER_TOKEN'),
        ],
    ],
];
