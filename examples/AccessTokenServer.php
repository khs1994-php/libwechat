<?php

declare(strict_types=1);

require __DIR__.'/../vendor/autoload.php';

$wechat = new \WeChat\WeChat($app_id, $app_secret, $token, $cache);

$wechat->access_token->server(true);
