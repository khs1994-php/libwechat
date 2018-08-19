<?php

declare(strict_types=1);

namespace WeChat;

class Facade extends \Illuminate\Support\Facades\Facade
{
    protected static function getFacadeAccessor()
    {
        return WeChat::class;
    }
}
