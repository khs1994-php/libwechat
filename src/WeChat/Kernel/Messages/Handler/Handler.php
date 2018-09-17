<?php

declare(strict_types=1);

namespace WeChat\Kernel\Messages\Handler;

use WeChat\Kernel\Messages\Message;
use WeChat\Kernel\Messages\MessageInterface;

class Handler implements HandlerInterface
{
    protected $response;

    protected $fromUserName;

    protected $toUserName;

    protected $createTime;

    protected $msgType;

    protected $msgId;

    public function __construct($message)
    {
        $this->fromUserName = $message->ToUserName;
        $this->toUserName = $message->FromUserName;
        $this->createTime = $message->CreateTime;
        $this->msgType = $message->MsgType;
        $this->msgId = $message->MsgId;
    }

    /**
     * @return null|MessageInterface
     */
    public function handle()
    {
        return new Message();
    }
}
