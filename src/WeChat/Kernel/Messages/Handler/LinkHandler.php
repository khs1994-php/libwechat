<?php

declare(strict_types=1);

namespace WeChat\Kernel\Messages\Handler;

class LinkHandler extends Handler
{
    public $title;

    public $description;

    public $url;

    public function __construct($message)
    {
        parent::__construct($message);

        $this->title = $message->Title;
        $his->description = $message->Description;
        $this->url = $message->Url;
    }
}
