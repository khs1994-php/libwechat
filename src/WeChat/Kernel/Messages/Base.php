<?php

declare(strict_types=1);

namespace WeChat\Kernel\Messages;

abstract class Base
{
    public $toUserName;

    public $fromUserName;

    public $createTime;

    protected $msgType = 'text';

    abstract public function build();
}
