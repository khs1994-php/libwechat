<?php

declare(strict_types=1);

namespace WeChat\Kernel\Messages\Handler;

/**
 *  用户未关注时，进行关注后的事件推送
 */
class ScanUnSubscribeEventHandler extends ScanSubscribeEventHandler
{
    public $actual_event = 'subscribe';
}
