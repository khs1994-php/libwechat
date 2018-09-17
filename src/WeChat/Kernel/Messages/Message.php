<?php

declare(strict_types=1);

namespace WeChat\Kernel\Messages;

class Message implements MessageInterface
{
    public $toUserName;

    public $fromUserName;

    public $createTime;

    protected $msgType = 'text';

    /**
     * @return string
     */
    public function build()
    {
        return '';
    }
}
