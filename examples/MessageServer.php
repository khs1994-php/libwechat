<?php

declare(strict_types=1);

require __DIR__.'/../vendor/autoload.php';

$wechat = new \WeChat\WeChat($app_id, $app_secret, $token, $cache, $tencent_ai_appid, $tencent_ai_appkey);

return $wechat->message->receive(function ($message) {
    $message['MsgType'];
    // 取得消息类型
    // 根据消息类型，编写逻辑代码，返回 xml 格式的字符串

    return \WeChat\Support\Response::text($to_user, $from_user, $text);
});
