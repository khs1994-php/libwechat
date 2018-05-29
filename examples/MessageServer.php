<?php

require __DIR__.'/../vendor/autoload.php';

$wechat = new \WeChat\WeChat($app_id, $app_secret, $token, $cache);

$wechat->message->receive();

