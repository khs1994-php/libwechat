<?php

declare(strict_types=1);

namespace WeChat\Kernel\Support;

class XML
{
    public static function handle(string $xml)
    {
        return simplexml_load_string($xml);
    }
}
