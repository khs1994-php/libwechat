<?php

declare(strict_types=1);

namespace WeChat\Kernel\Messages\Handler;

/**
 * 扫描带参数二维码事件，用户未关注时，进行关注后的事件推送
 */
abstract class ScanUnSubscribeEventHandler extends ScanSubscribeEventHandler
{
    public $actual_event = 'subscribe';
}
