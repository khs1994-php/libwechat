<?php

declare(strict_types=1);

namespace WeChat\Analysis;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple): void
    {
        $pimple['analysis'] = function ($app) {
            return new Client($app);
        };
    }
}
