<?php

declare(strict_types=1);

namespace WeChat\Kernel\Messages\Handler;

use WeChat\Kernel\Messages\Message;
use WeChat\Kernel\Messages\MessageInterface;

class Handler implements HandlerInterface
{
    protected $actual_msgType = '';

    protected $actual_event = '';

    protected $response;

    protected $fromUserName;

    protected $toUserName;

    protected $createTime;

    protected $msgType;

    protected $msgId;

    public function __construct($message)
    {
        $this->fromUserName = (string) $message->ToUserName;
        $this->toUserName = (string) $message->FromUserName;
        $this->createTime = (string) $message->CreateTime;
        $this->msgType = (string) $message->MsgType;
        $this->msgId = (string) $message->MsgId;
    }

    /**
     * @return null|MessageInterface
     */
    public function handle()
    {
        if ($this->actual_msgType and $this->msgType !== $this->actual_msgType) {
            return null;
        }

        if ($this->actual_event and $this->event !== $this->actual_event) {
            return null;
        }

        return new Message();
    }
}
