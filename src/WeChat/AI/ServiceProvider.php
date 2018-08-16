<?php

declare(strict_types=1);

namespace WeChat\AI;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple): void
    {
        $pimple['ai'] = function ($app) {
            return new Client($app);
        };
    }
}
