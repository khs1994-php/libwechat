<?php

declare(strict_types=1);

namespace WeChat\Analysis;

use WeChat\WeChat;

/**
 * 数据统计
 *
 * Class Analysis
 */
class Analysis
{
    const WECHAT = 'https://api.weixin.qq.com/datacube/';

    private $access_token;

    private $curl;

    public function __construct(WeChat $app)
    {
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
