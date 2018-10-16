<?php

declare(strict_types=1);

namespace WeChat\Exceptions;

class WeChatException extends \Exception
{
    public $message;

    public $code;

    private const EXCEPTION_ARRAY = [
    ];

    /**
     * WeChatException constructor.
     *
     * @param string|null $message
     * @param int|null    $code
     */
    public function __construct(string $message = null, int $code = null)
    {
        $this->code = $code;

        $message ? $this->message = $message : (self::EXCEPTION_ARRAY[$code] ?? 'Error');
    }

    public function getJson(): void
    {
        header('Content-type:Application/json;charset=utf-8');

        die(json_encode([
                'ret' => $this->code,
                'message' => $this->message,
            ]
        ));
    }
}
