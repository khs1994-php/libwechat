<?php

declare(strict_types=1);

namespace WeChat\Message;

use Redis;
use WeChat\ShortUrl;
use WeChat\Temp\Temp;

/**
 * 媒体消息.
 */
class Media
{
    private $postXMLObj;
    private $to_user;
    private $from_user;
    private $create_time;
    private $media_id;
    private $message_id;
    private $key;

    private $cache;

    public function __construct(object $postObj, Redis $cache)
    {
        $this->postXMLObj = $postObj;
        $this->to_user = $postObj->ToUserName;
        $this->from_user = $postObj->FromUserName;
        $this->create_time = $postObj->CreateTime;
        $this->media_id = $postObj->MediaId;
        $this->message_id = $postObj->MsgId;
        $this->key = $this->create_time.'_'.$this->message_id.'_'.$this->from_user;

        $this->cache = $cache;
    }

    // 图片消息

    public function image()
    {
        $img_url = $this->postXMLObj->PicUrl;
        $short_url = ShortUrl::get($img_url);
        $key = $this->key;
        $this->cache->hset('wechat_image', $key, $short_url);

        return null;
    }

    // 语音消息

    public function voice()
    {
        $media_id = $this->media_id;
        $format = $this->postXMLObj->Format;
        $this->cache->hset('wechat_voice', $this->key, $media_id);

        DB::insert('insert wx_message_voice values(null,?,?,?,?,?,?)',
            [
                $media_id,
                $this->to_user,
                $this->from_user,
                $this->create_time,
                $format,
                $this->message_id,
            ]);

        $voice = Temp::temp()->download($media_id);
        $text = AI::ai()->voice($voice);

        return Response::text($this->from_user, $this->to_user, $text);

        /*

         CREATE TABLE wx_message_voice (
         `id`          INT AUTO_INCREMENT,
         `media_id`    VARCHAR(100) NOT NULL,
         `to_user`     VARCHAR(50) NOT NULL,
         `from_user`   VARCHAR(50) NOT NULL,
         `create_time` VARCHAR(50) NOT NULL,
         `format`      VARCHAR(10) NOT NULL,
         `msg_id`     VARCHAR(100) NOT NULL,
          PRIMARY KEY (`id`)
          );

         */
    }

    // 视频消息

    public function video()
    {
        $postXMLObj = $this->postXMLObj;
        $media_id = $this->media_id;
        $thumb_media_id = $postXMLObj->ThumbMediaId;
        $key = $this->key;
        $this->cache->hset('wechat_video', $key, $media_id);
        $this->cache->hset('wechat_video_thumb', $key, $thumb_media_id);

        return 'success';
    }

    // 短视频消息

    public function shortvideo()
    {
        $media_id = $this->media_id;
        $thumb_media_id = $this->postXMLObj->ThumbMediaId;
        $key = $this->key;
        $this->cache->hset('wechat_short_video', $key, $media_id);
        $this->cache->hset('wechat_short_video_thumb', $key, $thumb_media_id);

        return 'success';
    }
}
