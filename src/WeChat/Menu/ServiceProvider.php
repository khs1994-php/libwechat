<?php

declare(strict_types=1);

namespace WeChat\Menu;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple): void
    {
        $pimple['menu'] = function ($app) {
            return new Client($app);
        };
    }
}
