<?php

declare(strict_types=1);

namespace WeChat\Comment;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple): void
    {
        $pimple['comment'] = function ($app) {
            return new Client($app);
        };
    }
}
