<?php

declare(strict_types=1);

namespace WeChat\AccessToken;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple): void
    {
        $pimple['access_token'] = function ($app) {
            return new AccessToken($app);
        };
    }
}
