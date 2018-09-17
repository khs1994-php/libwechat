<?php

declare(strict_types=1);

namespace WeChat\Kernel\Messages\Handler;

class ImageHandler extends Handler
{
    public $picUrl;

    public $mediaId;

    public function __construct($message)
    {
        parent::__construct($message);

        $this->picUrl = $message->MsgType;

        $this->mediaId = $message->MediaId;
    }
}
