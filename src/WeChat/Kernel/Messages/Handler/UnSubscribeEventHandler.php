<?php

declare(strict_types=1);

namespace WeChat\Kernel\Messages\Handler;

/**
 * 用户取消关注公众号.
 */
class UnSubscribeEventHandler extends SubscribeEventHandler
{
    public $actual_event = 'unsubscribe';
}
