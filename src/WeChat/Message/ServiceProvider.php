<?php

declare(strict_types=1);

namespace WeChat\Message;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple): void
    {
        $pimple['message_auto_reply_rule'] = function ($app) {
            return new AutoReplyRule($app);
        };
    }
}
