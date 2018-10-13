<?php

declare(strict_types=1);

namespace WeChat\OAuth;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple): void
    {
        $pimple['oauth'] = function ($app) {
            return new Client($app);
        };
    }
}
