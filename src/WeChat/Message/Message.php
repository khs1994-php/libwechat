<?php

namespace WeChat\Message;

use Redis;

/**
 * Class Message
 *
 * 接收微信服务器 post 过来的数据
 *
 * @package App\Http\Controllers\SDK\Message
 */
class Message
{
    const GET_AUTO_REPLY_RULE = 'https://api.weixin.qq.com/cgi-bin/get_current_autoreply_info?';

    private $cache;

    private $token;

    public function __construct(Redis $cache, string $token)
    {
        $this->cache = $cache;
        $this->token = $token;
    }

    /**
     * 验证消息真实性
     *
     * @return array|null|string
     *
     * @link   https://mp.weixin.qq.com/wiki?t=resource/res_main&id=mp1421135319
     */
    public function receive()
    {
        if (!($_GET['nonce'] ?? false)) {
            return self::list();
        }

        $nonce = $_GET['nonce'] ?? null;
        $timestamp = $_GET['timestamp'] ?? null;
        $signature = $_GET['signature'] ?? null;
        $echostr = $_GET['echostr'] ?? null;
        $openid = $_GET['openid'] ?? null;

        $token = $this->token;

        $array = [$nonce, $timestamp, $token];
        sort($array, SORT_STRING);

        if (sha1(implode($array)) === $signature) {

            // 首次验证

            if ($echostr) {

                return $echostr;
            }

            // 网址中包含 openid 说明是消息

            if ($openid) {

                return $this->exec();
            }
        }

        return $this->list();
    }

    /**
     * 根据 消息类型 执行逻辑
     *
     * @return string
     */
    private function exec()
    {
        $postXMLObj = simplexml_load_string(file_get_contents('php://input'));
        $message_type = strtolower($postXMLObj->MsgType);

        // 事件消息

        if ($message_type === 'event') {
            $event = new Event($postXMLObj);
            $eventType = strtolower($postXMLObj->Event);

            return $event->$eventType();
        }

        // 文本消息

        if ($message_type === 'text') {
            $text = new Text($postXMLObj, $this->cache);
            return $text();
        }

        // 地理位置消息， 链接消息

        if ($message_type === 'location' || $message_type === 'link') {
            $event = new Event($postXMLObj);

            return $event->$message_type();
        }

        // 媒体消息，包含图片，语音，视频，小视频

        if (isset($postXMLObj->MediaId)) {
            $media = new Media($postXMLObj, $this->cache);

            return $media->$message_type();
        }

        return 'false';
    }

    /**
     * 获取用户发来的消息
     */
    private function list()
    {
        echo '文字';
        var_dump($this->cache->hgetall('wechat_text'));
        echo '图片';
        var_dump($this->cache->hgetall('wechat_image'));
        echo '语音';
        var_dump($this->cache->hgetall('wechat_voice'));
        echo '视频';
        var_dump($this->cache->hgetall('wechat_video'));
        echo '视频缩略图';
        var_dump($this->cache->hgetall('wechat_video_thumb'));
        echo '小视频缩略图';
        var_dump($this->cache->hgetall('wechat_short_video_thumb'));

        return null;
    }
}
