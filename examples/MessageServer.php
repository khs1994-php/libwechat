<?php

declare(strict_types=1);

use WeChat\WeChat;

require __DIR__.'/../vendor/autoload.php';

$wechat = new WeChat($app_id, $app_secret, $token, $cache, $tencent_ai_appid, $tencent_ai_appkey);

// pushHandler 可以传入一个闭包，返回发给用户的消息
$wechat->server->pushHandler(function ($message) {
    // 取得消息类型
    $msgType = $message->MsgType;

    // 根据消息类型，编写逻辑代码，返回 xml 格式的字符串

    // 假设上一步取得的消息类型为 text,我们要返回一个 text 类型的消息

    // 开始构建返回的 xml
    $text = new \WeChat\Kernel\Messages\Text();
    $text->fromUserName = $message->ToUserName;
    $text->toUserName = $message->FromUserName;
    $text->content = '我收到了你的消息';

    return $text->build();
})->register();

class DemoTextMessage extends \WeChat\Kernel\Messages\Handler\TextHandler
{
    /**
     * @return \WeChat\Kernel\Messages\Text|null
     */
    public function handle()
    {
        // 用户发来的消息是否与此 Handler 匹配
        if (null === parent::handle()) {
            return null;
        }

        // 用户发来的消息
        $content = $this->content;

        if ('关键字' !== $content) {
            return null;
        }

        $text = new \Wechat\Kernel\Messages\Text();

        $text->fromUserName = $this->fromUserName;
        $text->toUserName = $this->toUserName;
        $text->content = '我收到了你的消息';

        return $text;
    }
}

// pushHandler也可以传入一个继承于 \WeChat\Kernel\Messages 的类
// 可以链式的多次调用 pushHandler
$wechat->server
    ->pushHandler(DemoTextMessage::class)
    // ->pushHandler(DemoTextMessage::class)
    ->register();
