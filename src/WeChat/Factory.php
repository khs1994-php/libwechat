<?php

declare(strict_types=1);

namespace WeChat;

/**
 * @method static Extend\MiniProgram\Application  miniProgram(array $config)
 * @method static Extend\Payment\Application      payment(array $config)
 * @method static Extend\OpenPlatform\Application openPlatform(array $config)
 * @method static Extend\Work\Application         work(array $config)
 * @method static Extend\OpenWork\Application     openWork(array $config)
 */
class Factory
{
    public static function make($name, array $config)
    {
        $namespace = ucfirst($name);

        $application = "\\WeChat\\Extend\\{$namespace}\\Application";

        return new $application($config);
    }

    public static function __callStatic($name, $arguments)
    {
        return self::make($name, ...$arguments);
    }
}
