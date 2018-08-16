<?php

declare(strict_types=1);

if (!(function_exists('wechat'))) {
    function wechat()
    {
        return app('wechat');
    }
}

class Wechat extends \WeChat\Facade
{
}
