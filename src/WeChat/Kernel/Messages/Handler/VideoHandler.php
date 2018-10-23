<?php

declare(strict_types=1);

namespace WeChat\Kernel\Messages\Handler;

abstract class VideoHandler extends Handler
{
    public $actual_msgType = 'video';

    public $mediaId;

    public $thumbMediaId;

    public function __construct($message)
    {
        parent::__construct($message);

        $this->mediaId = (string) $message->MediaId;
        $this->thumbMediaId = (string) $message->ThumbMediaId;
    }
}
