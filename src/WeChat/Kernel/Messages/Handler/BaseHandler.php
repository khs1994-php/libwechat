<?php

declare(strict_types=1);

namespace WeChat\Kernel\Messages\Handler;

abstract class BaseHandler
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
}
