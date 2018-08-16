<?php

declare(strict_types=1);

use Pimple\ServiceProviderInterface;
use WeChat\Server\Server;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(\Pimple\Container $pimple): void
    {
        $pimple['server'] = function ($app) {
            return new Server($app);
        };
    }
}
