<?php

namespace WeChat\Analysis;


use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['analysis'] = function ($app) {
            return new Analysis($app);
        };
    }
}
