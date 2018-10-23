<?php

declare(strict_types=1);

namespace WeChat\Kernel\Messages\Handler;

/**
 * 用户关注公众号.
 */
class SubscribeEventHandler extends Handler
{
    /**
     * @var string 事件类型，
     */
    public $event;

    public $actual_event = 'subscribe';

    public function __construct($message)
    {
        parent::__construct($message);

        $this->event = (string) $message->Event;
    }
}
