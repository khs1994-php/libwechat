<?php

declare(strict_types=1);

namespace WeChat\QRC;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple): void
    {
        $pimple['qrc'] = function ($app) {
            return new Client($app);
        };
    }
}
