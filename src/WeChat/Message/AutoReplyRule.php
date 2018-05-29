<?php

declare(strict_types=1);

namespace Wechat\Message;

use WeChat\WeChat;

class AutoReplyRule
{
    const AUTO_REPLY = 'https://api.weixin.qq.com/cgi-bin/get_current_autoreply_info?';

    private $curl;

    private $access_token;

    /**
     * 获取公众号的自动回复规则.
     *
     * @param WeChat $app
     *
     * @see   https://mp.weixin.qq.com/wiki?t=resource/res_main&id=mp1433751299
     */
    public function __construct(WeChat $app)
    {
        $this->curl = $app['curl'];

        $this->access_token = $app->access_token->get();
    }

    public function get()
    {
        $url = self::AUTO_REPLY.$this->access_token;

        return $this->curl->get($url);
    }
}
