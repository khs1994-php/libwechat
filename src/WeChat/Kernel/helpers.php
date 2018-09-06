<?php

declare(strict_types=1);

if (!(function_exists('wechat'))) {
    function wechat()
    {
        return app('wechat');
    }
}

/**
 * @method static WeChat\AccessToken\AccessToken access_token()
 * @method static WeChat\AI\Client               ai()
 * @method static WeChat\Base\Client             base()
 * @method static WeChat\Server\Server           server()
 * @method static WeChat\Temp\Client             temp()
 * @method static WeChat\Template\Client         template_message()
 * @method static Curl\Curl                      curl()
 * @method static Redis                          cache()
 * @method static WeChat\Url\Client              url()
 */
class Wechat
{
}
