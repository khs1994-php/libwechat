<?php

declare(strict_types=1);

namespace WeChat\Kernel\Messages\Handler;

abstract class TextHandler extends Handler
{
    public $actual_msgType = 'text';

    protected $content;

    public function __construct($message)
    {
        parent::__construct($message);

        $this->content = (string) $message->Content;
    }
}
