<?php

declare(strict_types=1);

namespace WeChat\Kernel\Messages\Handler;

/**
 * 扫描带参数二维码事件 用户已关注时的事件推送
 */
class ScanSubscribeEventHandler extends Handler
{
    public $event;

    public $actual_event = 'SCAN';

    public $eventKey;

    public $ticket;

    public function __construct()
    {
        parent::__construct($message);

        $this->event = (string) $message->Event;
        $this->eventKey = (string) $message->EventKey;
        $this->ticket = (string) $message->Ticket ?? null;
    }
}
