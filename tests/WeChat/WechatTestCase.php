<?php

declare(strict_types=1);

namespace WeChat\Tests;

use PHPUnit\Framework\TestCase;
use WeChat\WeChat;

class WechatTestCase extends TestCase
{
    private static $instance;

    public static function getInstance()
    {
        if (self::$instance instanceof WeChat) {
            return self::$instance;
        }

        return self::$instance = new WeChat('1', '1', 'token',
            new \Redis(), '1', '1', []);
    }

    public static function close(): void
    {
        self::$instance = null;
    }
}
