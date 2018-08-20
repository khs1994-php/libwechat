<?php

declare(strict_types=1);

namespace WeChat\Server;

use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(\Pimple\Container $pimple): void
    {
        $pimple['server'] = function ($app) {
            return new Server($app);
        };
    }
}
