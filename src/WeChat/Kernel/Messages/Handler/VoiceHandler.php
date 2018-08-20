<?php

declare(strict_types=1);

namespace WeChat\Kernel\Messages\Handler;

class VoiceHandler extends BaseHandler
{
    public $mediaId;

    public $format;

    public function __construct($message)
    {
        parent::__construct($message);

        $this->mediaId = $message->MediaId;
        $this->format = $message->Format;
        $this->Recognition = $message->Recognition ?? null;
    }
}
