<?php

declare(strict_types=1);

if (!class_exists(\Illuminate\Support\Facades\Facade::class)) {
    return;
}

if (!(function_exists('wechat'))) {
    function wechat()
    {
        return app('wechat');
        // return app(WeChat\WeChat::class);
    }
}

class Wechat extends WeChat\Facade
{
}
