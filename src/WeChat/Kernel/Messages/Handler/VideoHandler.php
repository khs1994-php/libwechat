<?php

declare(strict_types=1);

namespace WeChat\Kernel\Messages\Handler;

class VideoHandler extends BaseHandler
{
    public $mediaId;

    public $thumbMediaId;

    public function __construct($message)
    {
        parent::__construct($message);

        $this->mediaId = $message->MediaId;
        $this->thumbMediaId = $message->ThumbMediaId;
    }
}
