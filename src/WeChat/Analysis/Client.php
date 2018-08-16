<?php

declare(strict_types=1);

namespace WeChat\Analysis;

use WeChat\WeChat;

/**
 * 数据统计
 *
 * Class Analysis
 */
class Client
{
    const WECHAT = 'https://api.weixin.qq.com/datacube/';

    private $access_token;

    private $curl;

    /**
     * Client constructor.
     *
     * @param WeChat $app
     *
     * @throws \Exception
     */
    public function __construct(WeChat $app)
    {
        $this->access_token = $app->access_token->get();

        $this->curl = $app->curl;
    }

    public static function analysis(): void
    {
    }

    public function userSummary(): void
    {
    }

    public function userCumulate(): void
    {
    }
}
