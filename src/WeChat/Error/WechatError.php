<?php

namespace WeChat\Error;

class WechatError extends \Error
{
    public $message;
    public $code;

    private const ERROR_ARRAY = [

    ];

    public function __construct(int $code, string $message = null)
    {
        $this->code = $code;
        if ($message) {
            $this->message = $message;
        } else {
            $this->message = self::ERROR_ARRAY[$code] ?? 'error';
        }
    }

    public function getJson()
    {
        header('Content-type:Application/json;charset=utf-8');

        die(json_encode([
                'ret' => $this->code,
                'message' => $this->message,
            ]
        ));
    }
}
