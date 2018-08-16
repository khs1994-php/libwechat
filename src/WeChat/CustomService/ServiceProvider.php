<?php

declare(strict_types=1);

namespace WeChat\CustomService;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple): void
    {
        $pimple['custom_service'] = function ($app) {
            return new Client($app);
        };
    }
}
