<?php

declare(strict_types=1);

namespace WeChat\Users;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple): void
    {
        $pimple['users'] = function ($app) {
            return new Client($app);
        };

        $pimple['user_black'] = function ($app) {
            return new Black($app);
        };

        $pimple['user_tag'] = function ($app) {
            return new Tag($app);
        };
    }
}
