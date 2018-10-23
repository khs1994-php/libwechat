<?php

declare(strict_types=1);

namespace WeChat\Kernel\Messages\Handler;

class LinkHandler extends Handler
{
    public $actual_msgType = 'link';

    public $title;

    public $description;

    public $url;

    public function __construct($message)
    {
        parent::__construct($message);

        $this->title = (string) $message->Title;
        $his->description = (string) $message->Description;
        $this->url = (string) $message->Url;
    }
}
