<?php

namespace WeChat\Message;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class MessageProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['message_server'] = function ($app) {
            return new Message($app['cache'], $app['TOKEN']);
        };
    }
}
