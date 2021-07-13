<?php

declare(strict_types=1);

use WeChat\WeChat;

require __DIR__.'/../vendor/autoload.php';

$wechat = new WeChat($app_id, $app_secret, $token, $cache);

$wechat->access_token->server(true);
