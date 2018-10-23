<?php

declare(strict_types=1);

namespace WeChat\Kernel\Messages\Handler;

class ImageHandler extends Handler
{
    public $actual_msgType = 'image';

    public $picUrl;

    public $mediaId;

    public function __construct($message)
    {
        parent::__construct($message);

        $this->picUrl = (string) $message->PicUrl;

        $this->mediaId = (string) $message->MediaId;
    }
}
