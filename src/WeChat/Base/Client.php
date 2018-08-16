<?php

declare(strict_types=1);

namespace WeChat\Base;

use WeChat\WeChat;

class Client
{
    const IP = 'https://api.weixin.qq.com/cgi-bin/getcallbackip?';

    private $app;

    public function __construct(WeChat $app)
    {
        $this->app = $app;
    }

    /**
     * 获取微信服务器IP地址
     *
     * @return string
     *
     * @throws \Exception
     */
    public function getValidIps()
    {
        $url = self::IP.$this->app->access_token->get();

        return $this->app->curl->get($url);
    }
}
