<?php

declare(strict_types=1);

namespace WeChat\Kernel\Messages\Handler;

abstract class VoiceHandler extends Handler
{
    public $actual_msgType = 'voice';

    public $mediaId;

    public $format;

    public function __construct($message)
    {
        parent::__construct($message);

        $this->mediaId = (string) $message->MediaId;
        $this->format = (string) $message->Format;
        $this->Recognition = (string) $message->Recognition ?? null;
    }
}
