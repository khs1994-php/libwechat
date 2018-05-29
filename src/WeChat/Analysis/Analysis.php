<?php

namespace WeChat\Analysis;

use WeChat\WeChat;

/**
 * 数据统计
 *
 * Class Analysis
 * @package App\Http\Controllers\SDK\Analysis
 */
class Analysis
{
    const WECHAT = 'https://api.weixin.qq.com/datacube/';
    private static $analysis;

    private $access_token;

    private $curl;

    private function __construct(WeChat $app)
    {
    }

    public static function analysis()
    {

    }

    public function userSummary()
    {

    }

    public function userCumulate()
    {

    }

}
