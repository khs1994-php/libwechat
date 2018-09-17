<?php

declare(strict_types=1);

namespace WeChat\Kernel\Messages\Handler;

class SubscribeEventHandler extends Handler
{
    /**
     * @var string 事件类型，subscribe(订阅、未关注用户扫描二维码)、unsubscribe(取消订阅)、SCAN (已关注用户扫描二维码)
     */
    public $event;

    /**
     * @var string 事件KEY值，是一个32位无符号整数，即创建二维码时的二维码scene_id
     */
    public $eventKey;

    /**
     * @var string二维码的ticket，可用来换取二维码图片
     */
    public $ticket;

    public function __construct($message)
    {
        parent::__construct($message);

        $this->event = $message->Event;
        $this->eventKey = $message->EventKey;
        $this->ticket = $message->Ticket;
    }
}
