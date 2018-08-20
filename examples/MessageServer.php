<?php

declare(strict_types=1);

use WeChat\Kernel\Messages\Text;
use WeChat\WeChat;

require __DIR__.'/../vendor/autoload.php';

$wechat = new WeChat($app_id, $app_secret, $token, $cache, $tencent_ai_appid, $tencent_ai_appkey);

return $wechat->server->push(function ($message) {
    // 取得消息类型
    $msgType = $message->MsgType;

    // 根据消息类型，编写逻辑代码，返回 xml 格式的字符串

    // 假设上一步取得的消息类型为 text,我们要返回一个 text 类型的消息

    // 开始构建返回的 xml
    $text = new Text();
    $text->fromUserName = $message->ToUserName;
    $text->toUserName = $message->FromUserName;
    $text->content = '我收到了你的消息';

    return $text->build();
})->serve();
