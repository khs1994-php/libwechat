<?php

declare(strict_types=1);

namespace WeChat\Message;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class MessageProvider implements ServiceProviderInterface
{
    public function register(Container $pimple): void
    {
        $pimple['message_server'] = function ($app) {
            return new Message($app['cache'], $app['TOKEN']);
        };
    }
}
