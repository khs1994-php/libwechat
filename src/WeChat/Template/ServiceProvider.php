<?php

declare(strict_types=1);

namespace WeChat\Template;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple): void
    {
        $pimple['template_message'] = function ($app) {
            return new Client($app);
        };
    }
}
