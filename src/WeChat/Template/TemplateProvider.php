<?php

namespace WeChat\Template;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class TemplateProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['template_message'] = function ($app) {
            return new Template($app);
        };
    }
}
