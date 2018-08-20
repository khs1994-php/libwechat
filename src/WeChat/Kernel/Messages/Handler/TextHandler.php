<?php

declare(strict_types=1);

namespace WeChat\Kernel\Messages\Handler;

abstract class TextHandler extends BaseHandler
{
    protected $content;

    public function __construct($message)
    {
        parent::__construct($message);

        $this->content = $message->Content;
    }
}
