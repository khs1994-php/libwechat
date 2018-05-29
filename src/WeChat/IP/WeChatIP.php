<?php

namespace WeChat\IP;

use WeChat\WeChat;

class WeChatIP
{
    const IP = 'https://api.weixin.qq.com/cgi-bin/getcallbackip?';

    /**
     * 获取微信服务器IP地址
     *
     * @param WeChat $app
     *
     * @return string
     */
    public static function get(WeChat $app)
    {
        $url = self::IP.$app->access_token->get();

        return $app['curl']->get($url);
    }
}
